<?php 
    require_once '../admin/models/Products.php';
    require_once 'Controller.php';
    
    class productsController extends Controller
    {
        private $model;
        function __construct(){
            $this->model = new Products();
        }

        public function index(){
            $this->render("products.php");
        }

        public function getProducts(){
            header('Content-type: application/json');
            echo json_encode($this->model->readProducts());
        }

        public function getProduct($id){
            header('Content-type: application/json');
            $product = [':id' => $id];
            echo json_encode($this->model->readProducts($product));
        }

        public function store(){
            $form = $this->model->validateForm($_POST);

            $errors = array();
            if(!$this->model->validateAlphabetic($form['name'], 4, 100)){array_push($errors, "El nombre no cumple con el formato");}
            if(!$this->model->validateNumeric($form['stock'])){array_push($errors, "El stock no cumple con el formato");}
            if(!$this->model->validateMoney($form['price'])){array_push($errors, "El precio no cumple con el formato");}
            if(!$this->model->isId($form['id'])){array_push($errors, "El id no cumple con el formato");}

            if(count($errors) == 0){
                $product = [
                    ':id' => $form['id'],
                    ':name' => $form['name'],
                    ':stock' => $form['stock'],
                    ':min_stock' => 0,
                    ':price' => $form['price'],
                    ':image' => $form['image'],
                    ':id_category' => $form['id_category'],
                ];
                $data = $this->model->createProduct($product);
                echo "<script>location.replace('/desafio2/admin/products/');</script>";
            }
            else{
                $this->render("products.php", $errors);
            }
        }

        public function delete($id){
            $product = [
                ':id' => $id
            ];
            $data = $this->model->deleteProduct($product);
            echo "<script>location.replace('/desafio2/admin/products/');</script>";
        }
    }
?>