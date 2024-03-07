# findit AJAX-PHP-MySQL Autocomplete Search Web App

This project demonstrates how to create a live search (autocomplete) feature using AJAX, PHP, MySQL and Apache Servers. When users start typing search terms, the app fetches relevant suggestions from a database and displays them in real-time.

## Prerequisites

Before you begin, ensure you have the following installed:

- **Code Editor**: Use a code editor like VS Code, Sublime Text or Notepad++.
- **XAMPP**: Install XAMPP, which includes Apache and MySQL.
- **Database**: Set up a MySQL database with sample data (details provided below).

## Database Setup

1. **Start XAMPP**: Open XAMPP and start both Apache and MySQL services.
2. **Access phpMyAdmin**: Open your browser and navigate to `localhost:8080/phpmyadmin` (replace `8080` with your system's port if different).
3. **Create a Database**: Click on "New" and create a database named `autocomplete` (or choose any other name).
4. **Create a Table**: Run the following SQL query to create a table named `search` with columns `id` (auto-increment) and `Name`:

    ```sql
    CREATE TABLE search_suggestions (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        suggestion VARCHAR(128) NOT NULL
    );

    INSERT INTO `search_suggestions`(`suggestion`) VALUES ("Introduction to AJAX", "XMLHttpRequest Object", "Request Methods", 
    "Requests, Responses and Errors", "Cross-Origin Resource Sharing (CORS)",
     "Security Considerations", "AJAX Best Practices", "Making Asynchronous Requests", 
     "Updating Web Page Content Without Reloading", 
     "AJAX with Forms", "Single-page Applications (SPAs)", 
     "Progressive Web Applications (PWAs)", 
     "Performance Optimization Techniques")
    ```

## Depedencies

This project makes use of several Node packages. To install them, simply run the following command:

```npm install
```

This command will read the package.json file in your project directory and install all the listed packages. Make sure you are in the correct project directory when you run this command.

## Files and Structure

1. **index.php**: The main file where users input data and view search results.
2. **db.php**: Contains database connection details.
3. **server.php**: Processes the AJAX requests and returns a response.
4. **script.js**: Contains JavaScript functions for AJAX requests.
5. **style.css**: Provides styling for the search engine.
6. **images**: Contains media files including the favicons.
7. **db.php**: This is the MySQL database configuration file.
8. Others include .gitignore, package.json, package-lock.json and README.md

## Usage

1. Place the above files in your `htdocs` folder (usually located in `C:/xampp/htdocs`).
2. Access the search page via `localhost/index.php`.
3. Start typing in the search input, and the autocomplete suggestions will appear.

## Credits

This project was inspired by Google's live search functionality and aims to enhance user experience on your website.

Feel free to customize and expand upon this basic example to suit your specific requirements!

An alternative version that uses Node.js and Express.js as servers can be found **here**.
