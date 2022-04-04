<?php 
    require_once '../admin/models/Products.php';
    
    class productsController
    {
        function __construct()
        {
            $model = new Products();
            var_dump($model->readProducts());
        }

        public function index()
        {
            $model = new Products();
            var_dump($model->readProducts());
        }
    }
?>