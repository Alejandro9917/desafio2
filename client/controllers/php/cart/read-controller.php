<?php
    session_start();
    // unset($_SESSION['cart']);
    // echo json_encode($_SESSION['cart']);
    if(isset($_SESSION['cart'])){
        echo json_encode($_SESSION['cart']);
    }else{
        echo json_encode(array(false));
    }
?>