<?php
    session_start();
    if(isset($_SESSION['idCustomer'])){
        echo json_encode(array('status'=>true, 'idCustomer'=>$_SESSION['idCustomer']));
    }else{
        echo json_encode(array('status'=>false));
    }
?>