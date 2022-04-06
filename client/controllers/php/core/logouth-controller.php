<?php
    // session_destroy();
    session_start();
    unset($_SESSION['idCustomer']);
    echo json_encode(array('status'=>true));
?>