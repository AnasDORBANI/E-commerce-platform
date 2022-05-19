<?php

require_once ROOTPATH."core/Database.php";

class Product
{
    private $db;
    
    public function __construct(){
        $this -> db = new Database;
    }

    public function allProducts () {
        $sql = "SELECT * FROM product ORDER BY timeStamp desc";
        $this->db->query($sql);
        $products = $this->db->resultSet();
        if ($this->db->rowCount() > 0){
            return $products;
        } else {
            return false;
        }
    }

    public function latestProducts(){
        $sql = "SELECT * FROM product ORDER BY timeStamp desc";
        $this->db->query($sql);
        $products = array_slice($this->db->resultSet(), 0,6);
        if ($this->db->rowCount() > 0){
            return $products;
        } else {
            return false;
        }
    }

    public function oneProduct($id){
        $sql = "SELECT * FROM product WHERE productId = ?";
        $this->db->query($sql);
        $row = $this->db->single([$id]);
        //Check user
        if($this->db->rowCount() > 0){
            return $row;
        } else {
            return false;
        }
    }
}