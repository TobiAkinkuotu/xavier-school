<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xavier School</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, yellow, blue);
            color: #fff;
        }
        header {
            background: linear-gradient(135deg, #4c6ef5, #15aabf);
            color: #fff;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        header .logo {
            display: flex;
            align-items: center;
        }
        header .logo img {
            height: 50px;
            margin-right: 15px;
        }
        header h1 {
            margin: 0;
            font-size: 1.8em;
        }
        .font-size-controls button {
            background: #fff;
            border: none;
            padding: 8px 12px;
            margin-left: 5px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        .font-size-controls button:hover {
            background: #e0e0e0;
        }
        nav {
            background: rgba(0, 0, 0, 0.7);
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
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
    </style>
    <script>
        function adjustFontSize(multiplier) {
            var elements = document.getElementsByClassName('adjustable-text');
            for (var i = 0; i < elements.length; i++) {
                var currentSize = window.getComputedStyle(elements[i], null).getPropertyValue('font-size');
                var newSize = parseFloat(currentSize) * multiplier;
                elements[i].style.fontSize = newSize + 'px';
            }
        }
    </script>
</head>
<body class="adjustable-text">
    <header role="banner">
        <div class="logo">
            <img src="/OIP.jpg" alt="Our School Logo">
            <h1>Xavier School</h1>
        </div>
        <div class="font-size-controls">
            <button onclick="adjustFontSize(1.1)" aria-label="Increase font size">A+</button>
            <button onclick="adjustFontSize(0.9)" aria-label="Decrease font size">A-</button>
        </div>
    </header>
    <nav>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="admissions.php">Admissions</a>
            <a href="support.php">Support</a>
            <a href="blind.php">blind</a>
        </div>
    </nav>
