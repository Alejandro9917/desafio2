<?php
    session_start();
    // unset($_SESSION['cart']);
    // echo json_encode($_SESSION['cart']);
    if(isset($_SESSION['idCustomer'])){
        echo json_encode($_SESSION['idCustomer']);
    }else{
        echo json_encode(array(false));
    }
?>