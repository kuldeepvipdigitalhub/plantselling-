<?php
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Razorpay API Key and Secret
$keyId = 'rzp_live_vfpJ3abCexre2k';
$keySecret = '8wTFoTXocQ7L0dSKtneXcNEo';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderId = $_POST['order_id'];

    try {
        $api = new Api($keyId, $keySecret);

        // Fetch payment details
        $payment = $api->payment->fetch($orderId);

        // Verify the payment status
        if ($payment['status'] === 'captured') {
            echo "Payment successful!";
        } else {
            echo "Payment failed. Please try again.";
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
