<?php
    $idProduct = $_POST['idProduct'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    session_start();
    // unset($_SESSION['cart']);
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'][0] = array($idProduct, $amount, $name, $price, $image);
    }else{
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array($idProduct, $amount, $name, $price, $image);
    }
    echo json_encode($_SESSION['cart']);
?>