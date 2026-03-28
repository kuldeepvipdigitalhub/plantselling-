<?php
require 'vendor/autoload.php';

use Razorpay\Api\Api;

$keyId = 'rzp_live_vfpJ3abCexre2k';
$keySecret = '8wTFoTXocQ7L0dSKtneXcNEo';

$api = new Api($keyId, $keySecret);

// ऑर्डर प्राप्त करें (API कनेक्टिविटी की जांच करने के लिए)
$orders = $api->order->all();
print_r($orders);
