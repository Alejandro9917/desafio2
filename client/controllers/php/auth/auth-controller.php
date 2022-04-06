<?php
try {
    require_once '../../../models/Database.php';
    require_once '../../../helpers/Validator.php';
    require_once '../../../models/Customers.php';
    $customer = new Customers;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = array();
    if(!$customer->setEmail($email))
        array_push($errors, 'Debe ingresar su correo electronico de manera correcta');
    if(!$customer->setPassword($password))
        array_push($errors, 'Debe ingresar su contraseña de manera correcta');
    if(count($errors) > 0)
        echo json_encode($errors);
    if(count($errors) == 0)
        echo json_encode($customer->checkPassword());
} catch (\Throwable $th) {
    //throw $th;
}

?>