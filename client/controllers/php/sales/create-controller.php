<?php
    require_once '../../../models/Database.php';
    require_once '../../../helpers/Validator.php';
    require_once '../../../models/Sales.php';
    $sale = new Sales;

    session_start();
    $date = new DateTime();
    $status = 0;
    $idCustomer = $_SESSION['idCustomer'];
    $errors = array();
    if(!$sale->setIdCustomer($idCustomer))
        array_push($errors, 'Debe ingresar el idCustomer');
    if(!$sale->setDate($date->format('Y-m-d')))
    array_push($errors, 'Debe ingresar una fecha valida');
    if(!$sale->setStatus($status))
        array_push($errors, 'Debe ingresar un estado valido');
    if(count($errors) > 0)
        echo json_encode($errors);
    if(count($errors) == 0)
        echo json_encode($sale->createSale());
?>