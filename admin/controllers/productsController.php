<?php 
    require_once '../admin/models/Products.php';
    require_once 'Controller.php';
    
    class productsController extends Controller
    {
        private $model;
        function __construct(){
            $this->model = new Products();
        }

        public function index()
        {
            $this->render("products.php");
        }
    }
?>