<?php 
    require_once '../admin/models/Categories.php';
    require_once 'Controller.php';
    
    class categoriesController extends Controller
    {
        private $model;
        function __construct(){
            $this->model = new Categories();
        }

        public function index(){
            $this->render("categories.php");
        }

        public function store(){
            $form = $this->model->validateForm($_POST);
            if($this->model->validateAlphabetic($form['name'], 4, 50)){
                $category = [
                    ':name' => $form['name'],
                ];
                $data = $this->model->createCategory($category);
                echo "<script>location.replace('/desafio2/admin/categories/');</script>";
            }

            else{
                echo "<script>location.replace('/desafio2/admin/categories/');</script>";
            }
        }

        public function getCategories(){
            header('Content-type: application/json');
            echo json_encode($this->model->readCategories());
        }

        public function delete($id){
            $category = [
                ':id' => $id
            ];
            $data = $this->model->deleteCategory($category);
            echo "<script>location.replace('/desafio2/admin/categories/');</script>";
        }
    }
?>