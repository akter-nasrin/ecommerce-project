<?php
include_once($_SERVER['DOCUMENT_ROOT']."/ecommerce_project/config.php");
use App\Carts;

$_cart = new Carts;
$carts = $_cart->index();

// Get the total price from the URL parameter
$total_price = isset($_GET['total_price']) ? $_GET['total_price'] : 0;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect shipping information
    $shipping_address = $_POST['shipping_address'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $phone = $_POST['phone'];

    // Proceed to payment
    $post_data = array();
    $post_data['store_id'] = "barco663efadec233a";
    $post_data['store_passwd'] = "barco663efadec233a@ssl";
    $post_data['total_amount'] = $total_price;
    $post_data['currency'] = "BDT";
    $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();
    $post_data['success_url'] = "http://localhost:80/ecommerce_project/admin/orders/store.php";
    $post_data['fail_url'] = "http://localhost:8080/ecommerce_project/front/php/views/elements/success.php";
    $post_data['cancel_url'] = "http://localhost/new_sslcz_gw/cancel.php";

    # Customer Information
    $post_data['cus_name'] = "Test Customer"; // Modify as needed
    $post_data['cus_email'] = "test@test.com"; // Modify as needed
    $post_data['cus_add1'] = $shipping_address;
    $post_data['cus_city'] = $city;
    $post_data['cus_postcode'] = $postal_code;
    $post_data['cus_country'] = "Bangladesh";
    $post_data['cus_phone'] = $phone;

    # Shipment Information
    $post_data['ship_name'] = "Test Shipment"; // Modify as needed
    $post_data['ship_add1'] = $shipping_address;
    $post_data['ship_city'] = $city;
    $post_data['ship_postcode'] = $postal_code;
    $post_data['ship_country'] = "Bangladesh";

    # Send Request to SSLCOMMERZ
    $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $direct_api_url);
    curl_setopt($handle, CURLOPT_TIMEOUT, 30);
    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($handle, CURLOPT_POST, 1);
    curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); 

    $content = curl_exec($handle);
    $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

    if ($code == 200 && !(curl_errno($handle))) {
        curl_close($handle);
        $sslcommerzResponse = $content;
    } else {
        curl_close($handle);
        echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
        exit;
    }

    # Parse the JSON response
    $sslcz = json_decode($sslcommerzResponse, true);

    if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != "") {
        echo "<meta http-equiv='refresh' content='0;url=" . $sslcz['GatewayPageURL'] . "'>";
        exit;
    } else {
        echo "JSON Data parsing error!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 30px;
            color: #333;
        }
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }
        button.btn {
            background-color: #007bff;
            color: white;
        }
        button.btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Checkout</h2>
    <p>Total Price: <?= number_format($total_price, 2); ?> BDT</p>
    
    <form action="checkout.php?total_price=<?= $total_price; ?>" method="POST">
        <div class="form-group">
            <label for="shipping_address">Shipping Address</label>
            <input type="text" class="form-control" name="shipping_address" id="shipping_address" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" id="city" required>
        </div>

        <div class="form-group">
            <label for="postal_code">Postal Code</label>
            <input type="text" class="form-control" name="postal_code" id="postal_code" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Confirm and Proceed to Payment</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
