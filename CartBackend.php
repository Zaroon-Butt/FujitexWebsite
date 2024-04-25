<?php
session_start();

if (isset($_POST['cart']) && count($_POST['cart']) > 0 && isset($_POST['cart'][0]['name'])) {
    $product = $_POST['cart'][0];
    $productName = $product['name'];
    $productPrice = $product['price'];
    $productPic = $product['pic'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName] += array(
            'name'=>$productName,
            'price' => $productPrice,
            'pic' => $productPic
        );
    } else {
        $_SESSION['cart'][$productName] = array(
            'name' => $productName,
            'price' => $productPrice,
            'pic' => $productPic
        );
    }

    echo 'success';
} else {
    echo 'CART IS EMPTY';
}
?>
