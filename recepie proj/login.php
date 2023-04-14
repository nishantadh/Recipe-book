<?php
session_start();
$_SESSION['logged'] = null;
$_SESSION['id'] = null;
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        /* Body Styles */
        body {
            background-image: linear-gradient(to bottom right, #6c63ff, #2d2f7f);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Styles */
        form {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            max-width: 300px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            padding: 5px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #6c63ff;
            border: none;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #564dff;
        }

    </style>
</head>

<body>
    <div>
        <div>
            <h1>Login</h1>
        </div>
        <div>
            <form method="post" action="./config.php" enctype="multipart/form-data">
                <label>Email:</label>
                <input type="email" name="email"><br>
                <label>Password:</label>
                <input type="password" name="password"><br>
                <input type="submit">
                <br>
                <br>

                <div>
                    Not a member? <a href="register.php">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>


<?php

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // Perform logout action
    // For example, unset session variables or destroy the session
    session_unset();
    session_destroy();
    // Redirect to login page
    header("Location: login.php");
    exit;
}
?>