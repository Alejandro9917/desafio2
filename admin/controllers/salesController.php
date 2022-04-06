<?php 
    require_once '../admin/models/Sales.php';
    require_once 'Controller.php';
    
    class salesController extends Controller
    {
        private $model;
        function __construct(){
            $this->model = new Sales();
        }

        public function index(){
            $this->render("sales.php");
        }

        public function getSales(){
            header('Content-type: application/json');
            echo json_encode($this->model->readSale());
        }
    }
?>