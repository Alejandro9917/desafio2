<?php 
    require_once '../admin/models/Users.php';
    
    class loginController
    {
        function __construct()
        {
            $model = new Users();
            var_dump($model->getUsuarios());
        }

        public function index()
        {
            $model = new Users();
            var_dump($model->getUsuarios());
        }
    }
?>