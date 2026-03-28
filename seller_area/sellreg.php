<?php
$con = mysqli_connect('localhost', 'root', '', 'plantselling');
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['sb'])) {
    // Get form data
    $name = $_POST['fullname'];
    $email = $_POST['emailid'];
    $password = $_POST['password'];
    $confirm = $_POST['cpass'];
    $phone = $_POST['phoneno'];
    $address = $_POST['address'];

    // Check if passwords match
    if ($password === $confirm) {
        // Hash the password before storing it

        // Prepare SQL query to prevent SQL injection
        $query = "INSERT INTO `seller`(`Fullname`, `Emailid`, `Password`, `Confirmpassword`, `PhoneNo`, `Address`) 
                  VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        
        // Check if statement preparation was successful
        if (!$stmt) {
            echo "Error in SQL statement preparation: " . mysqli_error($con);
            exit();
        }

        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ssssss', $name, $email, $password, $confirm, $phone, $address);
        
        // Execute the query
        $run = mysqli_stmt_execute($stmt);
        
        if ($run) {
            // Redirect to seller login page if registration is successful
            header("Location: ./seller_login.php");
            exit();
        } else {
            echo "<script>alert('Registration failed. Please try again.');</script>";
            echo "Error: " . mysqli_error($con); // Output any error messages
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Passwords do not match. Please try again.');</script>";
    }
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
    <style>
        /* Global Styles */
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

        /* Main container for registration form */
        .container {
            width: 450px;
            padding: 40px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent background */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        /* Header for registration form */
        .title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50; /* Green color for plant theme */
        }

        /* Input fields styles */
        .input-box {
            margin-bottom: 20px;
            position: relative;
        }

        .input-box input {
            width: 100%;
            padding: 12px;
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

        /* Label styles */
        .input-box label {
            position: absolute;
            top: -12px;
            left: 12px;
            background-color: white;
            padding: 0 5px;
            font-size: 14px;
            color: #388E3C;
        }

        /* Button styles */
        .button input {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button input:hover {
            background-color: #388E3C; /* Darker green on hover */
        }

        /* Link to login page */
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

        /* Footer or any other section */
        .footer {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 14px;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Styling for the button */
        .btn {
            width: 100%;
            height: 45px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #388E3C;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Seller Registration</div>
        <div class="content">
            <form action="sellreg.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fullname" id="fname" placeholder="Enter your full name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email ID</span>
                        <input type="email" name="emailid" id="eid" placeholder="Enter your email ID" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phoneno" id="pno" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" id="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="cpass" id="cpassw" placeholder="Confirm your password" required>
                    </div>
                    <div class="input-box">
                        <label for="Address">Address</label>
                        <input type="text" name="address" id="add" placeholder="Enter address" required />
                    </div>
                </div>

                <div class="button">
                    <input onclick="alert('you have succcessfully registered')"type="submit" name="sb" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
