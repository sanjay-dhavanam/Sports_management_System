🏆 Sports Management System

A complete Sports Management System built with PHP, MySQL, HTML, CSS and powered by XAMPP.
It allows Admins to manage events, results, and participation while Students can register, view results, and track their participation.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

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

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

⚙️ Tech Stack

Frontend: HTML, CSS, PHP

Backend: PHP (with PDO for secure DB connection)

Database: MySQL

Server: Apache (via XAMPP)

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

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

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

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

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

📸 Screenshots
<img width="1702" height="902" alt="image" src="https://github.com/user-attachments/assets/bb5c7b2d-354f-44fc-9e27-42961ea3ff0d" />

<img width="2204" height="1165" alt="image" src="https://github.com/user-attachments/assets/af3befee-29ef-4a73-b992-b7adb84e81de" />

<img width="2204" height="1163" alt="image" src="https://github.com/user-attachments/assets/738a9016-48be-431c-8515-29aede2d758b" />

<img width="2204" height="1167" alt="image" src="https://github.com/user-attachments/assets/cfcbfd50-01da-4aac-b19b-29f0868c07e6" />

<img width="2204" height="1167" alt="image" src="https://github.com/user-attachments/assets/f45fc748-683c-426e-9503-72e814e141ca" />

<img width="2204" height="1165" alt="image" src="https://github.com/user-attachments/assets/0f8eb5e6-91f1-437e-9461-dd891fc248fc" />

<img width="2204" height="1167" alt="image" src="https://github.com/user-attachments/assets/e8ab6d16-34ba-4837-811a-41a8218461e2" />

<img width="2204" height="1167" alt="image" src="https://github.com/user-attachments/assets/42430de0-1678-43d7-bd57-e79635096d2b" />

<img width="2204" height="1167" alt="image" src="https://github.com/user-attachments/assets/d89b4f96-7f61-4a60-9053-d84a5f5ead57" />

<img width="2204" height="1163" alt="image" src="https://github.com/user-attachments/assets/7b00fe8a-9dbe-45b4-8a92-ccaa5483ace9" />

<img width="2204" height="1164" alt="image" src="https://github.com/user-attachments/assets/b2714ca1-92dc-4a73-95ec-1e6f1f31b64d" />

<img width="2204" height="1169" alt="image" src="https://github.com/user-attachments/assets/86002559-4912-4539-93f2-431f194d3b32" />

<img width="2204" height="1165" alt="image" src="https://github.com/user-attachments/assets/e2c09640-b28c-4600-915a-ec11f16bb4af" />

<img width="2204" height="1169" alt="image" src="https://github.com/user-attachments/assets/6b769217-f214-4b3d-991c-1b4b3d8a4e3e" />

<img width="2202" height="1160" alt="image" src="https://github.com/user-attachments/assets/e42d7c31-f946-4940-a3cf-37a7da6ed512" />

<img width="2204" height="1165" alt="image" src="https://github.com/user-attachments/assets/940b13de-7c93-4fee-80b1-692a81829b00" />

<img width="2204" height="1165" alt="image" src="https://github.com/user-attachments/assets/9a17e93c-06be-43d6-89ef-57bc9bc0da10" />

<img width="2204" height="1171" alt="image" src="https://github.com/user-attachments/assets/1f0703f4-533f-4d5a-ae8a-d20432ce0da2" />

<img width="2204" height="1168" alt="image" src="https://github.com/user-attachments/assets/7a5fcd3d-dfcb-40ec-ade0-f9a675e223a9" />

<img width="2204" height="1163" alt="image" src="https://github.com/user-attachments/assets/164f6fc4-d24c-4c47-ba7c-74227e6640b1" />

<img width="2204" height="1172" alt="image" src="https://github.com/user-attachments/assets/52cf8616-f72d-45dc-b9e2-b2c31a6002d7" />

<img width="2220" height="1179" alt="image" src="https://github.com/user-attachments/assets/361c1512-37fb-45aa-a016-533e2077928f" />

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

🌐 Deployment URL

After setup, your system will run on:

👉 http://localhost/Sports_Management_System

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

🌍 Free Online Deployment (InfinityFree)

You can also host this project online for free using InfinityFree
.

1️⃣ Create an Account

Go to 👉 https://infinityfree.net

Sign up for a free account

2️⃣ Create a New Hosting Space

After login, click “Create Account”

Choose a free subdomain (example: sportsmgmt.epizy.com)

Select PHP + MySQL

3️⃣ Upload Project Files

Open the File Manager (or use FileZilla FTP)

Upload all project files into the htdocs folder

4️⃣ Setup Database

Open MySQL Databases in InfinityFree dashboard

Create a new database

Copy DB Name, Username, Password, and Hostname

5️⃣ Import Database

Open phpMyAdmin (link available in InfinityFree dashboard)

Import the sportsdb.sql file from your repo

6️⃣ Update connection.php

Edit connection.php with InfinityFree DB credentials:

<?php
$host = "sqlXXX.epizy.com";  // Your InfinityFree MySQL host
$dbname = "epiz_xxxxxx_sportsdb"; // Your DB name
$username = "epiz_xxxxxx";  // Your DB username
$password = "your_password"; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}
?>

7️⃣ Access Your Website

Now visit your free domain:

http://yoursite.epizy.com


✅ Your Sports Management System is live online! 🎉

--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

👨‍💻 Author

Sanjay Dhavanam

🎓 B.Tech IT Student

💻 Passionate in Web Development

🌟 GitHub: sanjay-dhavanam
