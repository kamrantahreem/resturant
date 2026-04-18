Restaurant Management System
A dynamic web application built to manage restaurant operations, including menu display, user authentication, and data management. This project features a responsive frontend with a robust PHP backend.

Features:
User Authentication: Secure login and logout system (login.php, logout.php).
Menu Management: Ability to add and display food items (burgers, pizzas, steaks, etc.).
Database Integration: Seamless connection to MySQL for storing restaurant data.
Responsive UI: A clean interface featuring various food categories and high-quality assets.
Media Support: Includes a video showcase (restvid.mp4) and stylized image assets for a modern look.

Tech Stack
Frontend: HTML5, CSS3, JavaScript
Backend: PHP
Database: MySQL
Assets: Custom images (PNG/JPG/WebP) and MP4 video

Project Structure:
├── index.php        # Main landing page
├── login.php        # User login portal
├── add.php          # Interface to add new menu items
├── connect.php      # Database connection configuration
├── logout.php       # Session termination
├── restvid.mp4      # Promotional restaurant video
└── assets/          # (Image files like burger.png, pizza.png, etc.)

nstallation & Setup
Clone the repository:
git clone https://github.com/kamrantahreem/resturant.git

Set up a Local Server:
Move the project folder to your local server directory (e.g., htdocs for XAMPP or www for WAMP).

Database Configuration:
Open connect.php.
Update the database credentials (host, username, password, and database name) to match your local MySQL environment.
Import your .sql file (if available) via phpMyAdmin to set up the required tables.

Run the Application:
Open your browser and navigate to http://localhost/resturant/index.php

Preview
The application includes a variety of food categories:
Fast Food: Burgers, Fries, Pizza
Main Course: Steaks, Pasta, Crab
Desserts & Drinks: Cakes, Soup, Halwa

Contributing
Contributions are welcome! If you'd like to improve the code or add new features:
Fork the Project.
Create your Feature Branch (git checkout -b feature/AmazingFeature).
Commit your Changes (git commit -m 'Add some AmazingFeature').
Push to the Branch (git push origin feature/AmazingFeature).
Open a Pull Request.
