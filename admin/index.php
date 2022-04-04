<?php 
    include_once 'core/Routing.php';
    include_once 'controllers/productsController.php';
    include_once 'controllers/usersController.php';

    $router = new Routing();
    
    $controller = $router->controller;
    $method = $router->method;
    $param = $router->param;

    $controller = new $controller;
    $controller->$method($param)
?>