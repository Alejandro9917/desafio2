<?php 
    require_once '../admin/models/Users.php';
    require_once 'Controller.php';
    
    class usersController extends Controller
    {
        private $model;
        function __construct(){
            $this->model = new Users();
        }

        public function index(){
            var_dump($this->model->getUsuarios());
        }

        public function login(){
            $this->render("login.php");
        }

        public function validateLogin(){
            $user = [
                ':email' => $_POST['email'],
                ':password' => md5($_POST['password'])
            ];

            $data = $this->model->login($user);

            if(isset($data['id'])){
                session_start();
                $_SESSION['user'] = $data;
                echo "<script>location.replace('/desafio2/admin/products/');</script>";
            }

            else{
                echo "<script>location.replace('/desafio2/admin/users/login/');</script>";
            }
        }
    }
?>