FROM php:8.2-apache

# Install dependencies and PHP extensions
RUN apt-get update -yqq \
    && apt-get install -y --no-install-recommends \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    libicu-dev \
    curl \
    git \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) mysqli pdo_mysql zip intl \
    && docker-php-ext-install -j$(nproc) exif opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copy composer from the official composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files to the container
COPY . /var/www/html/

# Install composer dependencies
RUN COMPOSER_ALLOW_SUPERUSER=1 COMPOSER_MEMORY_LIMIT=-1 composer install --no-dev --optimize-autoloader --no-interaction

# Extract auto_install modules
RUN unzip auto_install/ar_SuiteCRM_lang_7.15.zip -d auto_install/arabic \
    && unzip auto_install/SuiteEstate_Growth_CRM_Free.zip -d auto_install/estate

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Configure OPcache
RUN { \
        echo 'opcache.memory_consumption=256'; \
        echo 'opcache.interned_strings_buffer=8'; \
        echo 'opcache.max_accelerated_files=4000'; \
        echo 'opcache.revalidate_freq=2'; \
        echo 'opcache.fast_shutdown=1'; \
    } > /usr/local/etc/php/conf.d/opcache-recommended.ini

# Configure PHP Limits for SuiteCRM
RUN { \
        echo 'memory_limit=512M'; \
        echo 'upload_max_filesize=100M'; \
        echo 'post_max_size=100M'; \
        echo 'max_execution_time=600'; \
        echo 'date.timezone="UTC"'; \
    } > /usr/local/etc/php/conf.d/suitecrm-limits.ini

# Use the production php.ini
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Permissions will be set after mounting the volume
