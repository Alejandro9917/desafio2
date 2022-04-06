<?php
    require_once '../../../models/Database.php';
    require_once '../../../helpers/Validator.php';
    require_once '../../../models/Sales.php';
    $sale = new Sales;

    session_start();
    $cart = $_SESSION['cart'];
    foreach ($_SESSION['cart'] as  $value) {
        $sale->setIdProduct($value[0]);
        $sale->setAmount($value[1]);
        $sale->setId($_POST['id']);
        $sale->createSalesDetail();
    }
    echo json_encode(array('finalizado'));
?>