<?php
    require_once '../../../models/Database.php';
    require_once '../../../helpers/Validator.php';
    require_once '../../../models/Products.php';
    $product = new Products;
    if(isset($_GET['type']))
        $type = $_GET['type'];
    
    switch ($type) {
        case 'all':
            echo json_encode($product->readProducts());
            break;
        
        case 'category':
            $product->setIdCategory($_GET['idCategory']);
            echo json_encode($product->readProductForIdCategory());
            break;
        default:
            echo json_encode($product->readProducts());
            break;
    }
?>