<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - D.E.J. Frozen Goods</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        section {
            min-height: 72.7vh;
            margin: 10px;
        }
        form {
            margin: 50px;
            border-radius: 5px;
            font-size: 16px;
            letter-spacing: 2px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #ffffff;
        }
        button {
            width: 100%;
            margin: 10px;
            padding: 10px;
            background-color: #e45226;
            font-size: 16px;
            letter-spacing: 2px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #202020;
            box-shadow:  0 0 10px #202020, 0 0 10px #202020;
            color: #e45226;
        }
        form a {
            text-align: center;
            text-decoration: none;
            width: 100%;
            margin: 10px;
            padding: 10px;
            background-color: #e45226;
            font-size: 16px;
            letter-spacing: 2px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form a:hover {
            background-color: #202020;
            box-shadow:  0 0 10px #202020, 0 0 10px #202020;
            color: #e45226;
        }
        #buttons {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <div id="logo">
            <img src="../logo.png">
            <a href="../index.html">D.E.J.</a>
        </div>
        <nav>
            <a href="../index.html">Products</a>
            <a href="../news.html">Updates</a>
            <a href="../about-us.html">About Us</a>
        </nav>
        <a href="index.php" id="contact-button">Log In</a>
    </header>
    <h1>Hello <?php echo $user_data['username'];?>!</h1>
    <p>Welcome to the Log In Page! Your already Signed In! Click here if you want to <a href="logout.php">Log out</a>.</p>
    <footer>
        <p>&copy; 2024 D.E.J. Frozen Goods. All rights reserved.</p>
        <p>Follow me on:
            <a href="#">Facebook</a>
            <a href="#">LinkedIn</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </p>
    </footer>
</body>
</html>