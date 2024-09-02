                  
<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/ecommerce_project/config.php");

use App\Orders;

$_order = new Orders();
$order = $_order->show();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6">
                <h1 class="text-center mb-5">Show</h1>
                <ul class="nav d-flex justify-content-center fs-4 fw-bold mb-4">
                    <li class="nav-item">
                        <a class="nav-link text-success" href="index.php">Lists</a>
                    </li>

                </ul>

                <dl class="row">
                    <dt class="col-sm-3">ID:</dt>
                    <dd class="col-sm-9"><?= $order['id'];?></dd>
                    <dt class="col-sm-3"> Product ID:</dt>
                    <dd class="col-sm-9"><?= $order['product_id'];?></dd>
                    <dt class="col-sm-3"> User ID:</dt>
                    <dd class="col-sm-9"><?= $order['user_id'];?></dd>
                    <dt class="col-sm-3">Product Title:</dt>
                    <dd class="col-sm-9"><?= $order['title'];?></dd>
                    <dt class="col-sm-3">Quantity:</dt>
                    <dd class="col-sm-9"><?= $order['quantity'];?></dd>
                    <dt class="col-sm-3">Grandtotal:</dt>
                    <dd class="col-sm-9"><?= $order['grand_total'];?></dd>
                    <dt class="col-sm-3">Address:</dt>
                    <dd class="col-sm-9"><?= $order['address'];?></dd>
                    <dt class="col-sm-3">Invoice:</dt>
                    <dd class="col-sm-9"><?= $order['invoice_number'];?></dd>
                </dl>



            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>






