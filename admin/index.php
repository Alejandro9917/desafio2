<?php 
    include_once 'core/Routing.php';
    include_once 'controllers/productsController.php';
    include_once 'controllers/loginController.php';

    $router = new Routing();

    echo $router->controller;
    echo $router->method;
    echo $router->param;
    
    $controller = new $router->controller();
    //$controller->$router->method();
?>