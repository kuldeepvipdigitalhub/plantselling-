<?php
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Razorpay API Key and Secret
$keyId = 'rzp_live_vfpJ3abCexre2k';
$keySecret = '8wTFoTXocQ7L0dSKtneXcNEo';

try {
    // Initialize Razorpay API
    $api = new Api($keyId, $keySecret);

    // Order details
    $orderData = [
        'receipt'         => 'receipt_123',
        'amount'          => 50000, // Amount in paise
        'currency'        => 'INR',
        'payment_capture' => 1 // Automatically capture payment
    ];

    $order = $api->order->create($orderData);

    echo json_encode(['id' => $order['id']]);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
