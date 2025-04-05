<?php
session_start();

// Database connection and UsersTable class would be included here
require_once '../../classes/exPDO/DatabaseConnexion.php';
require_once '../../classes/exPDO/UserTable.php';

// Handle Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user details from the database
    $user = UsersTable::rechercherUserByUsername($username);

    if ($user && $password == $user->password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user->role; // Store role in session
        
        // Check if user is admin
        if ($username == 'admin' && $password == 'admin') {
            $_SESSION['admin'] = 'yes'; // Admin check
        }

        header("Location: MainPage.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #2c5c9a;
            padding: 10px;
            color: white;
            display: flex;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .container {
            background-color: #f1f1f1;
            padding: 40px;
            text-align: center;
        }
        .container h1 {
            font-size: 36px;
        }
        .form-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .form-container div {
            border: 1px solid #ccc;
            padding: 20px;
            width: 40%;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <span><strong>Students Management System</strong></span>
    </div>



 
    <div class="form-container">

        <div>
            <h3>Login</h3>
            <form method="POST" action="">
                <input type="text" name="username" placeholder="Username" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <button type="submit" name="login">Login</button>
            </form>
            <?php if (isset($error)) { echo "<p>{$error}</p>"; } ?>
        </div>


    </div>

</body>
</html>