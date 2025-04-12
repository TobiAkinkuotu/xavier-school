<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Xavier School</title>
    <style>
        body {
            background: linear-gradient(to right, yellow, blue);
            font-family: Arial, sans-serif;
            text-align: center;
            color: #fff;
        }
        nav {
            background: rgba(0, 0, 0, 0.7);
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav img {
            height: 50px;
            margin-left: 20px;
        }
        .nav-links {
            display: flex;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            transition: background 0.3s;
        }
        .nav-links a:hover {
            background: yellow;
            color: black;
        }
        .marquee {
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            font-size: 18px;
            white-space: nowrap;
            overflow: hidden;
            color: white;
        }
        h1 {
            margin-top: 50px;
            font-size: 36px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav>
        <img src="/OIP.jpg" alt="Our School Logo">
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="admissions.php">Admissions</a>
            <a href="support.php">Support</a>
            <a href="blind.php">blind</a>
            <a href="deaf.php">deaf</a>
        </div>
    </nav>
    
    <div class="marquee">
        <marquee>Welcome to our school. Kindly visit our About Us page to learn more about the school.</marquee>
    </div>
    
    <h1>WELCOME TO XAVIER SCHOOL FOR THE CHALLENGED</h1>
</body>
</html>
