<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password))
    {
        //read from database
        $query = "select * from users where username = '$username' limit 1";

        $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "Wrong username or password!";
    }else
    {
    echo "Please enter some valid information!";
    }
}
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
        <a href="login.php" id="contact-button">Log In</a>
    </header>
    <section>
        <h1>Log In</h1>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required></input>

            <label for="Password">Password:</label>
            <input type="password" id="password" name="password" required></input>

            <div id="buttons">
                <button type="submit">Log In</button>
                <a href="signup.php">Sign Up</a>
            </div>
        </form>
    </section>
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