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
    </style>
</head>
<body>
    <div class="navbar">
        <span><strong>Students Management System</strong></span>
        <span style="flex-grow: 1;"></span>
        <a href="MainPage.php">Home</a>
        <a href="StudentList.php">Liste des étudiants</a>
        <a href="SectionList.php">Liste des sections</a>
        <a href="loginpage.php">Logout</a>
    </div>
    <div class="container">
        <h1>Hello, PHP LOVERS! Welcome to your administration Platform</h1>
    </div>
</body>
</html>