// ye file kisi option se link nhi h  account or profile option ke liye h 
<?php
session_start();

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'plantselling');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ensure user is logged in; if not, redirect to login page with a message
if (!isset($_SESSION['customer_id'])) {
    $_SESSION['redirected_from_profile'] = true; // Set a flag for the profile redirection
    header("Location: login.php");
    exit();
}

$customer_id = $_SESSION['customer_id'];

// Handle logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

// Handle profile update form submission
if (isset($_POST['update_profile'])) {
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phoneno = mysqli_real_escape_string($con, $_POST['phoneno']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    $update_query = "UPDATE customer SET 
                        Fullname = ?, 
                        Emailid = ?, 
                        Phoneno = ?, 
                        Address = ?, 
                        Gender = ? 
                     WHERE id = ?";
    $stmt = mysqli_prepare($con, $update_query);
    mysqli_stmt_bind_param($stmt, "sssssi", $fullname, $email, $phoneno, $address, $gender, $customer_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Profile updated successfully!');</script>";
    } else {
        echo "<script>alert('Failed to update profile!');</script>";
    }
}

// Fetch customer details
$customer_query = "SELECT * FROM customer WHERE id = ?";
$stmt = mysqli_prepare($con, $customer_query);
mysqli_stmt_bind_param($stmt, "i", $customer_id);
mysqli_stmt_execute($stmt);
$customer_result = mysqli_stmt_get_result($stmt);
$customer = mysqli_fetch_assoc($customer_result);

// Fetch customer orders
$order_query = "SELECT * FROM user_order WHERE customer_id = ?";
$stmt = mysqli_prepare($con, $order_query);
mysqli_stmt_bind_param($stmt, "i", $customer_id);
mysqli_stmt_execute($stmt);
$order_result = mysqli_stmt_get_result($stmt);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #4CAF50;
        }

        .logout-btn {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
        }

        .logout-btn:hover {
            background-color: #45a049;
        }

        .profile-section, .orders-section {
            margin-bottom: 20px;
        }

        h2 {
            color: #4CAF50;
            border-bottom: 2px solid #4CAF50;
            display: inline-block;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .profile-details, .edit-form {
            padding: 10px 0;
        }

        .profile-details p {
            font-size: 1.1rem;
            margin: 5px 0;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input, select {
            padding: 8px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome, <?php echo htmlspecialchars($customer['Fullname']); ?></h1>
            <form method="POST" action="">
                <button type="submit" name="logout" class="logout-btn">Logout</button>
            </form>
        </div>

        <div class="profile-section">
            <h2>Profile Details</h2>
            <div class="profile-details">
                <p><strong>Email:</strong> <?php echo htmlspecialchars($customer['Emailid']); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($customer['Phoneno']); ?></p>
                <p><strong>Address:</strong> <?php echo htmlspecialchars($customer['Address']); ?></p>
                <p><strong>Gender:</strong> <?php echo htmlspecialchars($customer['Gender']); ?></p>
                <p><strong>Registered On:</strong> <?php echo htmlspecialchars($customer['Date_Registered']); ?></p>
            </div>
        </div>

        <div class="edit-section">
            <h2>Edit Profile</h2>
            <form method="POST" action="">
                <input type="text" name="fullname" value="<?php echo htmlspecialchars($customer['Fullname']); ?>" required>
                <input type="email" name="email" value="<?php echo htmlspecialchars($customer['Emailid']); ?>" required>
                <input type="text" name="phoneno" value="<?php echo htmlspecialchars($customer['Phoneno']); ?>" required>
                <input type="text" name="address" value="<?php echo htmlspecialchars($customer['Address']); ?>" required>
                <select name="gender" required>
                    <option value="Male" <?php echo $customer['Gender'] === 'Male' ? 'selected' : ''; ?>>Male</option>
                    <option value="Female" <?php echo $customer['Gender'] === 'Female' ? 'selected' : ''; ?>>Female</option>
                    <option value="Other" <?php echo $customer['Gender'] === 'Other' ? 'selected' : ''; ?>>Other</option>
                </select>
                <button type="submit" name="update_profile">Update Profile</button>
            </form>
        </div>

        <div class="orders-section">
            <h2>Your Orders</h2>
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Invoice Number</th>
                    <th>Total Products</th>
                    <th>Amount Due</th>
                    <th>Order Date</th>
                    <th>Order Status</th>
                </tr>
                <?php while ($order = mysqli_fetch_assoc($order_result)) { ?>
                <tr>
                    <td><?php echo $order['order_id']; ?></td>
                    <td><?php echo htmlspecialchars($order['invoice_number']); ?></td>
                    <td><?php echo $order['total_products']; ?></td>
                    <td><?php echo $order['amount_due']; ?></td>
                    <td><?php echo $order['order_date']; ?></td>
                    <td><?php echo $order['order_status']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>
