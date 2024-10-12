# Fashion Brand Website

This project is a **responsive Full-stack E-commerce website**, created from scratch in 2021 for my personal practice. Built with **PHP**, **MySQL**, **CSS**, and **JavaScript**, the site features an **admin panel**, **email functionality**, **clean and modern UI** with a custom design, responsive layouts, and interactive elements.

## Key Features

- **Custom Admin Panel**: The site includes an admin section that allows authorized users to log in and manage the website content. Admins can easily add, edit, or delete products and other content.

- **Dynamic and Interactive User Interface**: The front-end design features a responsive layout, ensuring an optimized experience on both desktop and mobile devices.

- **Email Functionality with PHPMailer**: The contact page is connected to PHPMailer, allowing users to conveniently reach out via email. This functionality ensures reliable communication and provides a user-friendly experience for site visitors.

- **Backend Management**: The website utilizes MySQL for database management, offering efficient data handling and query execution.

## Installation

1. **Clone the repository:**

   ```bash
      git clone https://github.com/EkaterineSheshelidze/Fashion-brand.git
   ```

2. **Import the Database:**

   - Navigate to the db folder in the cloned project directory. There, you will find SQL files containing the database structure and sample data.

   - Use a tool like phpMyAdmin or the command line to import the SQL files into your MySQL server:

   ```bash
      mysql -u your_username -p your_database_name < path_to_db_file.sql
   ```

   - Make sure to create a new database first and import the SQL files into it.

3. **Install Dependencies:**

   - This project uses Composer for PHP dependency management. If you don’t have Composer installed, download it from getcomposer.org.

   - Navigate to the project directory and run:

   ```bash
      composer install
   ```

   This will install all the necessary dependencies, including PHPMailer.

4. **Configure the Application:**

   - In the config folder, you'll find a `config.sample.php` file. Copy this file and rename it to `config.php`.

   - Edit `config.php` to include your own database credentials, email settings, and other configuration details.
   - Make sure to specify:
     - Database host, name, username, and password.
     - Email SMTP settings if you're planning to use the email functionality.

5. **Run the Application**

   - Open your web browser and navigate to `http://localhost/your_project_directory`.

   - Log in using the admin credentials found in the database sample data.
