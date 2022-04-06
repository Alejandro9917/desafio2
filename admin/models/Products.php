<?php
    require_once '../admin/helpers/Validator.php';

    require_once 'Database.php';

    class Products extends Validator{
        private $id = null;
        private $name = null;
        private $stock = null;
        private $minStock = null;
        private $price = null;
        private $idCategory = null;

        public function setId($value){
            $this->id = $value;
            return true;
        }

        public function getId(){
            return $this->id;
        }

        public function setIdCategory($value){
            $this->idCategory = $value;
            return true;
        }

        public function getIdCategory(){
            return $idCategory->id;
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

        public function setStock($value){
            if($this->validateNumeric($value)){
                $this->stock = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getStock(){
            return $this->stock;
        }

        public function setMinStock($value){
            if($this->validateNumeric($value)){
                $this->minStock = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getMinStock(){
            return $this->minStock;
        }

        public function setPrice($value){
            if($this->validateMoney($value)){
                $this->price = $value;
                return true;
            }else{
                return false;
            }
        }

        public function getPrice(){
            return $this->price;
        }

        public function readProducts(){
            $sql = "SELECT name, id, image, stock, min_stock, price, id_category FROM products";
            $params = array();
            return Database::getRows($sql, $params);
        }

        public function readProduct($values){
            $sql = "SELECT name, id, image, stock, min_stock, price, id_category FROM products WHERE id = :id";
            $params = $values;
            return Database::getRow($sql, $params);
        }

        public function readProductForId(){
            $sql = `
            SELECT P.name, stock, min_stock, price, id_category, C.name FROM products AS P 
            INNER JOIN categories AS C ON C.id = P.id_category WHERE P.id = ?
            `;
            $params = array($this->id);
            return Database::getRows($sql, $params);
        }

        public function readProductForIdCategory(){
            $sql = `
            SELECT P.name, stock, min_stock, price, id_category, C.name FROM products AS P 
            INNER JOIN categories AS C ON C.id = P.id_category WHERE C.id = ?
            `;
            $params = array($this->idCategory);
            return Database::getRows($sql, $params);
        }

        public function createProduct($values){
            $sql = "INSERT INTO products(id, name, stock, min_stock, price, image, id_category) 
                    VALUES (:id, :name, :stock, :min_stock, :price, :image, :id_category)";
            $params = $values;
            return Database::executeRow($sql, $params);
        }

        public function updateCategory(){
            $sql ="UPDATE products SET name = ? , stock = ? , min_stock = ? , price = ?, id_category = ? WHERE id = ?";
            $params = array($this->name,$this->stock,$this->minStock,$this->price,$this->idCategory,$this->id);
            return Database::executeRow($sql, $params);
        }

        public function deleteProduct($values){
            $sql ="DELETE FROM products WHERE id = :id";
            $params = $values;
            return Database::executeRow($sql, $params);
        }
        
    }
?>