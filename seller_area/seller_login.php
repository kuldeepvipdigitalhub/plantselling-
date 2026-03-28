<?php
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'plantselling');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['emailid'], ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];

    // Prepare the SQL query to prevent SQL injection
    $query = "SELECT `Password` FROM `seller` WHERE `Emailid` = ?";
    $stmt = mysqli_prepare($con, $query);

    if (!$stmt) {
        echo "Error in SQL statement preparation: " . mysqli_error($con);
        exit();
    }

    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $storedPassword);

    if (mysqli_stmt_fetch($stmt)) {
        // Verify password directly
        if ($password === $storedPassword) {
            header("Location:seller_home.php"); // Redirect to the dashboard page
            exit();
        } else {
            echo "<script>alert('Invalid email or password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('22notext.jpg'); /* Add your background image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .back-home {
    text-align: center;
    margin-top: 20px;
    width: 100%;
}

.home-button {
    display: inline-block;
    background-color: #388e3c;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: bold;
    transition: background-color 0.3s;
}

.home-button:hover {
    background-color: #2e7d32;
}
        .container {
            width: 400px;
            padding: 30px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            border: 2px solid #4CAF50;
            border-radius: 6px;
            font-size: 16px;
            color: #333;
            background-color: transparent;
            transition: all 0.3s ease;
        }

        .input-box input:focus {
            border-color: #388E3C; /* Darker green when focused */
            outline: none;
        }

        .button input {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button input:hover {
            background-color: #388E3C;
        }

        .signup-link {
            text-align: center;
            margin-top: 10px;
        }

        .signup-link a {
            color: #388E3C;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Seller Login</div>
        <form action="seller_login.php" method="POST">
            <div class="input-box">
                <label for="emailid">Email ID</label>
                <input type="email" name="emailid" id="emailid" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="button">
                <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">
                Don't have an account? <a href="sellreg.php">Register here</a>
            </div>
        </form>
    </div>
</body>
</html>
