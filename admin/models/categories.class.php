<?php
    class Categories extends Validator{
        private $id = null;
        private $name = null;

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

        public function createCategory(){
            $sql = "INSERT INTO categories(name) VALUES (?)";
            $params = array($this->name);
            return Database::executeRow($sql, $params);
        }

        public function updateCategory () {
            $sql = "UPDATE categories SET name = ? WHERE id = ?";
            $params = array($this->name, $this->id);
            return Database::executeRow($sql, $params);
        }

        public function deleteCategory(){
            $sql = "DELETE FROM categories WHERE id = ?";
            $params = array($this->id);
            return Database::executeRow($sql, $params);
        }

        public function readCategoryForId(){
            $sql = "SELECT name, timestamp FROM categories WHERE id = ?";
            $params = array($this->id);
            return Database::getRows($sql, $params);
        }

        public function readCategories(){
            $sql = "SELECT id, name, timestamp FROM categories";
            $params = array(null);
            return Database::getRows($sql, $params);
        }
    }
?>