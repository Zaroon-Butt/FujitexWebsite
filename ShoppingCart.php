<?php
session_start();

if (isset($_SESSION['cart'])) {

    if (isset($_GET['remove'])) {
        
        unset($_SESSION['cart'][$_GET['remove']]);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Shoppingcart.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <?php include('nav.html') ?>
    <div class="container">
        <h2>Your Products</h2>
        <?php
        $totalAmount = 0;
        foreach ($_SESSION['cart'] as $product) {
            $totalAmount += intval($product['price']);
            ?>
            <div class="cart-container">
                <div class="product-image">
                    <img src="<?php echo $product['pic'] ?>" alt="">
                </div>
                <div class="description">
                    <p class="pname">Product name: <?php echo $product['name'] ?></p>
                    <p class="price">Product price: <?php echo $product['price'] ?></p>
                    <div class="quantity-container">
                       
                            <button class="minus-btn" type="button" name="button">-</button>
                            <input type="number" class="quantity" name="quantity" min="1" max="5" value="1">
                            <button class="plus-btn" type="button" name="button">+</button>
                    </div>
                    <a class="remove" href="?remove=<?php echo $product['name'] ?>">Remove</a>
                </div>
                
            </div>
        <?php
        }
        ?>
        
        <div class="Summary">
            <h2>Summary</h2>
        <div class="checkout">
        <h3>Total Amount: </h3>
            <h4><span id="total-amount"><?php echo $totalAmount ?></span></h4>
        </div>
        <button class="btncheckout"><a href="Checkout.php?totalamount=<?php echo $totalAmount ?>">Checkout</a></button>
        </div>
    </div>
</body>
<script>
    const minusBtns = document.querySelectorAll('.minus-btn');
    const plusBtns = document.querySelectorAll('.plus-btn');
    const quantities = document.querySelectorAll('.quantity');
    const totalAmount = document.querySelector('#total-amount');
    minusBtns.forEach((minusBtn, index) => {
        minusBtn.addEventListener('click', () => {
            if (quantities[index].value > 1) {
                quantities[index].value--;
                totalAmount.innerHTML = (parseInt(totalAmount.innerHTML) - <?php echo intval($product['price']); ?>).toString();
            }
        });
    });

    plusBtns.forEach((plusBtn, index) => {
        plusBtn.addEventListener('click', () => {
            if (quantities[index].value < 5) {
                quantities[index].value++;
                totalAmount.innerHTML = (parseInt(totalAmount.innerHTML) + <?php echo intval($product['price']); ?>).toString();
        }
    });
});
</script>
</html>
<?php
}else{?>
<h2>Cart is empty</h2>
<?php }?>
