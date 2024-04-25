<?php

include('db_connection.php');
$customer_name = $_POST['customer_name'];
$customer_no = $_POST['customer_no'];
$customer_address = mysqli_real_escape_string($db_connection, $_POST['customer_address']);
$customer_email = mysqli_real_escape_string($db_connection,$_POST['customer_email']);
session_start();
$product_names = array();
$product_prices = array();

foreach ($_SESSION['cart'] as $product) {
  $product_names[] = $product['name'];
  $product_prices[] = $product['price'];
}
$allProducts = implode(',', $product_names);
$allPrices = implode(',', $product_prices);
$save = "INSERT INTO shoppingcart (customer_name, customer_no, customer_address, customer_email, product_name, product_price)
VALUES ('$customer_name', '$customer_no', '$customer_address', '$customer_email', '$allProducts', '$allPrices')";

$result = mysqli_query($db_connection, $save);
if ($result) {
  header('location: Home.php');
} else {
  ECHO "ERROR ___".mysqli_error($db_connection);
}


?>