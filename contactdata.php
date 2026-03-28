<?php
session_start();
include('./live.php'); // Ensure this connects to your database
include('./function1/common_function.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize Input
    $fname = htmlspecialchars(trim($_POST['fname']));
    $lname = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate Input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    if (!is_numeric($phone) || strlen($phone) != 10) {
        die("Invalid phone number");
    }

    // Insert into Database
    $query = "INSERT INTO contacts (first_name, last_name, email, phone, message, created_at) VALUES (?, ?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $fname, $lname, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='webhome.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
?>
