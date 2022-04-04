<?php
    class Users extends Validator{
        private $id = null;
        private $user = null;
        private $name = null;
        private $email = null;
        private $password = null;
        private $token = null;
        private $idRole = null;
       

        public function setId($value){
                $this->id = $value;
                return true;
        }

        public function getId(){
            return $this->id;
        }

        public function setIdRole($value){
            $this->idRole = $value;
            return true;
        }

        public function getIdRole(){
            return $idRole->id;
        }

        public function setUser($value){
            if($this->validateAlphanumeric($value, 1, 50)){
                $this->user = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getUser(){
            return $this->user;
        }

        public function setToken($value){
            if($this->validateAlphanumeric($value, 1, 10)){
                $this->token = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getToken(){
            return $this->token;
        }

        public function setName($value){
            if($this->validateAlphanumeric($value, 1, 75)){
                $this->name = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getName(){
            return $this->name;
        }


        public function setEmail($value){
            if($this->validateEmail($value)){
                $this->email = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword($value){
            if($this->validatePassword($value)){
                $this->password = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getPassword(){
            return $this->password;
        }
        
        public function checkCorreo(){
            $sql = "SELECT id FROM users  WHERE email = ?";
            $params = array($this->email);
            $data = Database::getRow($sql, $params);
            if($data){
                $this->id = $data['id'];
                return true;
            }else{
                return false;
            }
        }

        public function checkCorreoRecuperacion(){
            $sql = "SELECT id, email FROM users WHERE email = ?";
            $params = array($this->email);
            return Database::getRows($sql, $params);
        }
        
        public function checkPassword(){
            $sql = "SELECT password FROM users WHERE id = ?";
            $params = array($this->id);
            $data = Database::getRow($sql, $params);	
            if(password_verify($this->password,$data['password'])){
                return true;
            }else{
                return false;
            }
        }

        public function checkToken(){
            $sql = "SELECT id FROM users WHERE id = ? AND token = ?";
            $params = array($this->id,$this->token);
            return Database::getRows($sql, $params);	
        }

        public function changePassword(){
            $hash = password_hash($this->password, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET password = ? WHERE id = ?";
            $params = array($hash, $this->id);
            return Database::executeRow($sql, $params);
        }

        public function logOut(){
            //return session_destroy();
            unset($_SESSION['user']);
            return true;
        }

        public function getUsuarios(){
            $sql = "SELECT id, user, name, email, password, token, id_role FROM users ";
            $params = array(null);
            return Database::getRows($sql, $params);
        }

        public function createUsuario(){
            $hash = password_hash($this->password,PASSWORD_DEFAULT);
            $sql ="INSERT INTO users(name, email, password) VALUES (?,?,?)";
            $params = array($this->name,$this->email, $hash);
            return Database::executeRow($sql, $params);
        }

        public function readUsuario(){
            $sql = "SELECT id, name, email FROM users WHERE id = ?";
            $params = array($this->id);
            return Database::getRows($sql, $params);
        }

        public function updateUsuario(){
            $sql = "UPDATE users SET name = ?, email = ?, user = ?  WHERE id = ? ";
            $params = array($this->name,$this->email,$this->user, $this->id);
            return Database::executeRow($sql, $params);
        }
        
        public function deleteUsuario(){
            $sql = "DELETE FROM users WHERE id = ?";
            $params = array($this->id);
            return Database::executeRow($sql, $params);
        }
    }


?>