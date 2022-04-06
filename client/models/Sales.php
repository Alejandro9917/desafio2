<?php

    class Sales extends Validator{
        private $id = null;
        private $idCustomer = null;
        private $idDetail = null;
        private $idProduct = null;
        private $date = null;
        private $status = null;
        private $amount = null;
        

        public function setId($value){
            $this->id = $value;
            return true;
        }

        public function getId(){
            return $this->id;
        }

        public function setAmount($value){
            $this->amount = $value;
            return true;
        }

        public function getAmount(){
            return $this->amount;
        }

        public function setIdCustomer($value){
            $this->idCustomer = $value;
            return true;
        }

        public function getIdCustomer(){
            return $this->idCustomer;
        }

        public function setIdDetail($value){
            $this->idDetail = $value;
            return true;
        }

        public function getIdDetail(){
            return $this->idDetail;
        }

        public function setIdProduct($value){
            $this->idProduct = $value;
            return true;
        }

        public function getIdProduct(){
            return $this->idProduct;
        }

        public function setDate($value){
            $this->date = $value;
            return true;
        }

        public function getDate(){
            return $this->date;
        }

        public function setStatus($value){
            $this->status = $value;
            return true;
        }

        public function getStatus(){
            return $this->status;
        }

        public function createSale(){
            $sql = "INSERT INTO sales(date, status, id_customer) VALUES (?,?,?)";
            $params = array($this->date, $this->status, $this->idCustomer);
            Database::executeRow($sql, $params);
            return Database::getLastRowId();
            
        }

        public function createSalesDetail(){
            $sql = "INSERT INTO sales_details (id_sale, id_product, amount) VALUES (?,?,?)";
            $params = array($this->id, $this->idProduct, $this->amount);
            return Database::executeRow($sql, $params);
        }

        public function deleteSaleDetail(){
            $sql = 'DELETE FROM sales_details WHERE id = ?';
            $params = array($this->idDetail);
        }

        public function readDetailSale(){
            $sql = 'SELECT P.name AS name,  COUNT(P.name) AS count , P.price, C.name, P.image
            FROM sales AS S INNER JOIN sales_details AS DT ON S.id = DT.id_sale 
            INNER JOIN products AS P ON P.id = DT.id_product
            INNER JOIN categories AS C ON C.id = P.id_category WHERE id_customer = ?';
            $params = array($this->idCustomer);
            return Database::getRows($sql, $params);
        }
    }

?>