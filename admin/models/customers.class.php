<?php
    class Customers extends Validator{
        private $id = null;
        private $name = null;
        private $telephone = null;
        private $email = null;
        private $password = null;
        private $address = null;

        public function setId($value){
            $this->id = $value;
            return true;
        }

        public function getId(){
            return $this->id;
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

        public function setTelephone($value){
            if($this->validatePhone($value)){
                $this->telephone = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getTelephone(){
            return $this->telephone;
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

        public function setAddress($value){
            if($this->validateAlphanumeric($value, 1, 75)){
                $this->address = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getAddress(){
            return $this->address;
        }

        public function readCustomers(){
            $sql = "SELECT id, name, telephone, email, password, address FROM customers";
            $params = array(null);
            return Database::getRows($sql, $params);
        }

        public function readCustomerForId(){
            $sql = "SELECT name, telephone, email, password, address FROM customers WHERE id = ?";
            $params = array($this->id);
            return Database::getRows($sql, $params);
        }

        public function createCustomer(){
            $hash = password_hash($this->password,PASSWORD_DEFAULT);
            $sql ="INSERT INTO customers(name, telephone, email, password, address) VALUES (?,?,?,?,?)";
            $params = array($this->name,$this->telephone,$this->email,$hash, $this->address);
            return Database::executeRow($sql, $params);
        }

        public function updateCustomer(){
            $sql = "UPDATE customers SET name = ? , telephone = ? , email = ?, address = ? WHERE id = ?";
            $params = array($this->name,$this->telephone, $this->email, $this->address);
            return Database::executeRow($sql, $params);
        }

        public function updatePasswordForId(){
            $hash = password_hash($this->password, PASSWORD_DEFAULT);
            $sql = "UPDATE customers SET password = ? WHERE id = ?";
            $params = array($hash, $this->id);
            return Database::executeRow($sql, $params);
        }
    }
?>