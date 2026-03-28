<?php
session_start();
$message = '';

// Check if the user clicked the "Login" button
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user is an admin
    if ($username == 'atul13072003@gmail.com' && $password == 'Atul@13072003') {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = 'atul13072003@gmail.com';
        header('Location: panel.php');
    } else {
        $message = 'Invalid login credentials';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
             
            margin: 0;
            padding: 0;
            background:url('adminbg.jpg');
            background-size: 1750px 750px;
        }
        h1 {
            text-align: center;
            color: darkgreen;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-weight: bold;
            margin-bottom: 10px;
        }
        /* Responsive CSS */
        @media screen and (max-width: 600px) {
            form {
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <h1>Admin Login</h1>
    <?php if (!empty($message)) { ?>
        <p class="error"><?php echo $message; ?></p>
    <?php } ?>
    <form method="POST" action="">
        <label>Email ID:</label>
        <input type="text" name="username" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>