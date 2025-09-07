🏆 Sports Management System

A complete Sports Management System built with PHP, MySQL, HTML, CSS and powered by XAMPP.
It allows Admins to manage events, results, and participation while Students can register, view results, and track their participation.

🚀 Features

👨‍🎓 Student Module

Signup/Login with student details

Register for sports events (avoids duplicate registrations)

View participation and results

🛡️ Admin Module

Secure login (default: sanjay / sanjay123)

Add/Edit/Delete events

Add/Edit/Delete results

Manage student participation

📊 Database Integration

Fully integrated with MySQL

Data stored in structured tables (student_info, admin_info, events, results, participation)

🎨 UI/UX

Responsive dashboard for both Admin & Students

Clean, minimal, and easy to use

⚙️ Tech Stack

Frontend: HTML, CSS, PHP

Backend: PHP (with PDO for secure DB connection)

Database: MySQL

Server: Apache (via XAMPP)

🖥️ Installation Guide

Follow these steps carefully to set up the project on your local machine.

1️⃣ Install XAMPP

Download and install XAMPP from 👉 Apache Friends

During installation, make sure Apache and MySQL are selected.

After installation, open the XAMPP Control Panel and start:

✅ Apache

✅ MySQL

2️⃣ Clone this Repository
git clone https://github.com/sanjay-dhavanam/Sports_management_System.git


Or download the ZIP and extract.

3️⃣ Place Project in htdocs

Go to your XAMPP installation folder, usually:

C:\xampp\htdocs\


Create a folder named:

Sports_Management_System


Copy all project files into this folder.

4️⃣ Setup Database

Open phpMyAdmin in your browser:

http://localhost/phpmyadmin


Create a new database:

CREATE DATABASE sportsdb;


Import the SQL file:

Click on the sportsdb database

Go to Import → Choose sportsdb.sql (provided in repo)

Click Go

✅ This will create all required tables:

student_info

admin_info

events

results

participation

Insert default Admin credentials:

INSERT INTO admin_info (username, password) VALUES ('sanjay', 'sanjay123');

5️⃣ Configure Backend Connection

Open connection.php in your project.

Ensure the details are correct:

<?php
$host = "localhost";
$dbname = "sportsdb";
$username = "root";   // default XAMPP MySQL user
$password = "";       // keep blank for XAMPP

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}
?>

6️⃣ Run the Project

Open your browser

Enter the following URL:

http://localhost/Sports_Management_System


You will see the Home Page.

For Admin Login:

URL: http://localhost/Sports_Management_System/admin_login.php

Credentials:

Username: sanjay

Password: sanjay123

For Student Login:

Sign up at http://localhost/Sports_Management_System/sign-up.php

Then login using your Student ID & Password

📂 Project Structure
Sports_Management_System/
│── add_event.php
│── add_result.php
│── admin_home.php
│── admin_login.php
│── connection.php
│── edit_event.php
│── edit_participation.php
│── edit_result.php
│── index.php
│── login.php
│── logout.php
│── seed_student.php
│── sign-up.php
│── student_results.php
│── style.css
│── user_show.php
│── view_events.php
│── view_participation.php
│── view_results.php
│── /uploads
│── sportsdb.sql   ← Import this into phpMyAdmin

📸 Screenshots (Optional)

Add some screenshots of your system here — login page, dashboard, event list, results page.

🌐 Deployment URL

After setup, your system will run on:

👉 http://localhost/Sports_Management_System

👨‍💻 Author

Sanjay Dhavanam

🎓 B.Tech IT Student

💻 Passionate in Web Development

🌟 GitHub: sanjay-dhavanam
