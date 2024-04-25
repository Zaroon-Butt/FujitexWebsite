<?php
$totalAmount = $_GET['totalamount'];
session_start();

if (isset($_SESSION['cart'])) {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Checkout.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
<div class="container">
    <h2>Checkout</h2>
        <form method="POST" action="CheckoutBackend.php">
        <div class="customerinfo">
            <p>Full Name</p>
                <p><input type="text" name="customer_name"  /></p>
                <p>Address</p>
                <p><input type="text" name="customer_address"  /></p>
                <p>Phone no: </p>
                <p><input type="text" name="customer_no"/></p>
                <p>Email: </p>
                <p><input type = "text" name="customer_email"/></p>
            </div>
            <div class="productinfo">
            <?php
            foreach ($_SESSION['cart'] as $product) {
            ?>
            <div class="cart-container">
                <div class="product-image">
                    <img src="<?php echo $product['pic'] ?>" alt="">
                </div>
                <div class="description">
                    <p class="pname">Product name: <?php echo $product['name'] ?></p>
                    <p class="price">Product price: <?php echo $product['price'] ?></p>
                </div>
                
            </div>
        <?php
        }
        ?>
    </div>
    <div class="Summary">
            <h2>Summary</h2>
        <div class="checkout">
        <h3>Total Amount: </h3>
        <h4><span id="total-amount"><?php echo $totalAmount ?></span></h4>
        <p><input class = "save" type="submit" value="SAVE" /><input class = "reset" type="reset" value="RESET" /></p>
        </form>
</div>
</body>
</html>
<?php
}?>