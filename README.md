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

### Installation via Portainer (Recommended for Production)

1. **Create a New Stack:**
   - In Portainer, go to **Stacks** -> **Add stack**.
   - Name the stack (e.g., `badirracrm`). *Note: Do not use consecutive dashes or special characters in the name.*
   - Select **Repository** and enter the Git URL: `https://github.com/Salheen10/Badirra-CRM.git`
   - Click **Deploy the stack**. (This will take a few minutes as it downloads dependencies via Composer and bakes the code into the image).

2. **Run the Web Installer:**
   - Open your browser and navigate to your configured domain (e.g., `http://crm.yourdomain.com`).
   - Accept the license agreement and proceed to the configuration screen.

3. **Database Configuration (CRITICAL STEP):**
   When you reach the Database Configuration screen, you MUST enter the exact details that the Docker container initialized:
   
   *Under Database Configuration (Left Side):*
   - **Database Name:** `badirra_crm` *(Must include the underscore)*
   - **Host Name:** `db`
   - **User:** `root`
   - **Password:** `root`
   - **Badirra CRM Database User (Dropdown):** Choose **Same as Admin User**

   *Under Site Configuration (Right Side):*
   - Enter your desired Admin username and password.
   - **URL of Badirra CRM Instance:** Make sure this is your actual public domain (`http://crm.yourdomain.com`), not the server IP.

4. Click **Next** to complete the installation.

### Troubleshooting: Database Connection Failed
If the web installer throws an error saying *"The provided database host, username, and/or password is invalid"*, it means the MariaDB volume has cached old passwords from a previous failed deployment.
**To fix this:**
1. In Portainer, go to **Stacks** and remove the CRM stack.
2. Go to **Volumes** and delete the volume ending in `_db_data` (e.g., `badirracrm_db_data`).
3. Re-deploy the stack. This forces the database to generate fresh, clean credentials.

## License

This project is licensed under the AGPLv3 license.
