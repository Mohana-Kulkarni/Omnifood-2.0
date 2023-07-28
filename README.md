# Omnifood-2.0

**Live Website:** [https://omnifood-meals.000webhostapp.com/](https://omnifood-meals.000webhostapp.com/)

![Build Status](https://img.shields.io/badge/build-passing-brightgreen)

## Description
Omnifood is an Online Food Ordering System that allows users to browse a variety of dishes and place food orders online.

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [Contact](#contact)
- [Acknowledgments](#acknowledgments)

## Installation
1. Ensure you have PHP and MySQL installed on your system.
2. Clone this repository to your local machine.
3. Import the database schema from `database.sql` into your MySQL server.
4. Update the database connection configuration in `db.php` with your MySQL credentials.

## Usage
1. Start your local PHP development server.
2. Visit `http://localhost/` in your browser to access the Omnifood application.
3. Browse dishes and add items to your cart.
4. Proceed to the checkout page to place your order.

## Features
- User authentication and registration
- Browse various dishes
- Add items to the cart and proceed to checkout
- Users can subscribe to receive exclusive offers

## Technologies Used
- PHP (Backend)
- HTML (Frontend)
- CSS (Styling)
- MySQL (Database)

## Project Structure
- `index.php`: Entry point of the application.
- `db.php`: Configuration file with database credentials.
- `login.php`: User login page.
- `signup.php`: User registration page.
- `meals.php`: Page displaying various dishes.
- `cart.php`: Shopping cart page for users to review and place their orders.
- `components/`: Contains reusable code components.
- `controllers/`: Contains PHP files handling the application's logic and business operations.
- `models/`: Contains PHP files defining database models and interactions.
- `css/`: Contains stylesheets for styling the application.
- `img/`: Contains all image assets used in the application.
- `js/`: Contains JavaScript files for client-side functionalities and interactions.
- `config/`: Contains PHP files for handling sessions, cookies, and other configurations.
- `database.sql`: SQL file with the database schema.

## Configuration
- Update the database credentials in `db.php` with your MySQL server information.

## Contributing
Contributions are welcome! If you'd like to contribute to Omnifood, please follow these steps:
1. Fork this repository and create a new branch.
2. Make your changes and submit a pull request.
3. Please adhere to the coding standards and write clear commit messages.

## Contact
For any questions or feedback, feel free to reach out to us at contact@omnifood.com.

## Acknowledgments
- Hat tip to the PHP and MySQL community for the fantastic libraries and resources.
