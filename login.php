<?php 
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'plantselling');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['sb'])) {
    $email = $_POST['em'];
    $password = $_POST['ps'];

    // Secure query using prepared statements
    $stmt = $con->prepare("SELECT * FROM customer WHERE Emailid = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Check password
        if ($password === $user["Password"]) { // Replace this with password_verify if passwords are hashed
            session_start();
            $_SESSION["em"] = $email;
            header("Location: ./webhome.php");
            exit();
        } else {
            echo "<script>alert('Password does not match');</script>";
        }
    } else {
        echo "<script>alert('Email does not exist');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Nursery Login</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('img/22notext.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        header a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .container {
            width: 400px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            font-size: 2rem;
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .input-box {
            position: relative;
            margin: 20px 0;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 2px solid #4CAF50;
            border-radius: 5px;
            outline: none;
        }

        .input-box label {
            position: absolute;
            top: 10px;
            left: 15px;
            font-size: 1rem;
            color: #555;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-box input:focus + label,
        .input-box input:valid + label {
            top: -10px;
            left: 10px;
            font-size: 0.8rem;
            color: #4CAF50;
            background: white;
            padding: 0 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            color: white;
            background: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #45a049;
        }

        .signup-link {
            margin-top: 20px;
            text-align: center;
        }

        .signup-link a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <a href="./webhome.php">&#8592; Back Home</a>
    </header>
    <div class="container">
        <h2>Login</h2>
        <form action="#" method="POST">
            <div class="input-box">
                <input type="email" name="em" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <input type="password" name="ps" required>
                <label>Password</label>
            </div>
            <button type="submit" name="sb" class="btn">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href="http://localhost/plantsell/coureg.php">Signup</a></p>
            </div>
        </form>
    </div>
</body>

</html>