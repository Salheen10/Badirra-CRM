<div align="center">
  <img src="themes/SuiteP/images/company_logo.png" alt="Badirra CRM Logo" width="300" />
</div>

# Badirra CRM

Badirra CRM is a powerful, optimized Customer Relationship Management (CRM) platform, tailored for enterprise efficiency and speed. 
Built on top of the robust SuiteCRM framework, it features a modern interface, extensive Arabic language support, and a highly optimized Docker environment for rapid deployment.

## Features

- **Modern UI/UX**: Enhanced SuiteP theme with a beautiful, responsive dark mode and dynamic interactions.
- **Optimized Performance**: Fine-tuned for speed with PHP OPcache, optimized database queries, and lightweight assets.
- **Docker Ready**: Fully containerized setup for easy deployment across any environment.
- **Full Arabic Support**: Comprehensive RTL (Right-to-Left) and Arabic language translations out of the box.

## Getting Started

### Prerequisites
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Salheen10/Badirra-CRM.git
   cd Badirra-CRM
   ```

2. **Configure Environment:**
   Copy the example environment file and update the database passwords.
   ```bash
   cp .env.example .env
   # Edit .env with your secure passwords
   ```

3. **Deploy with Docker:**
   ```bash
   docker-compose up -d --build
   ```

4. **Access the CRM:**
   Open your browser and navigate to `http://localhost:8080`.

## License

This project is licensed under the AGPLv3 license.
