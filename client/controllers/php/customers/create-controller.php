<?php
    require_once '../../../models/Database.php';
    require_once '../../../helpers/Validator.php';
    require_once '../../../models/Customers.php';
    $customer = new Customers;
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $address = $_POST['address'];
    $errors = array();
    if(!$customer->setName($name))
        array_push($errors, 'Debe ingresar su nombre');
    if(!$customer->setTelephone($telephone))
        array_push($errors, 'Debe ingresar su telefono de manera correcta');
    if(!$customer->setEmail($email))
        array_push($errors, 'Debe ingresar su correo electronico de manera correcta');
    if($password != $password2)
        array_push($errors, 'No inciden las contraseñas');
    if(!$customer->setPassword($password))
        array_push($errors, 'Debe ingresar su contraseña de manera correcta');
    if(!$customer->setAddress($address))
        array_push($errors, 'Debe ingresar su dirección de manera correcta');
    if(count($errors) > 0)
        echo json_encode($errors);
    if(count($errors) == 0)
        echo json_encode($customer->createCustomer());
?>