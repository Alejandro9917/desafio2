<?php 
    require_once '../admin/models/Customers.php';
    require_once 'Controller.php';
    
    class customersController extends Controller
    {
        private $model;
        function __construct(){
            $this->model = new Customers();
        }

        public function index(){
            $this->render("customers.php");
        }

        public function getCustomers(){
            header('Content-type: application/json');
            echo json_encode($this->model->readCustomers());
        }

        public function disable($id){
            //echo json_encode($this->model->readCustomers());
        }
    }
?>