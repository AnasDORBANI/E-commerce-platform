<?php

require_once ROOTPATH."core/Database.php";

class AdminModel
{
    private $db;
    
    public function __construct(){
        $this -> db = new Database;
    }
    
    public function getProducts(){
        $sql = "SELECT * FROM product";
        $this->db->query($sql);
        $products = $this->db->resultSet();
        return $products;
    }

    public function getCategories(){
        $sql = "SELECT * FROM categories";
        $this->db->query($sql);
        $categories = $this->db->resultSet();
        return $categories;
    }

    public function setProduct($product){
        $sql = "INSERT INTO product VALUES(null,?,'product_01.jpg',?,?,?,?,null)";
        $this->db->query($sql);
        $this->db->execute([$product['title'],$product['description'],$product['category'],$product['price'],$product['stock']]);
    }

    public function addCategory($category){
        $sql = "INSERT INTO categories VALUES(null,?)";
        $this->db->query($sql);
        $this->db->execute([$category]);
    }

    public function removeCategory($category){
        
        $sql = "DELETE FROM categories WHERE category = ?";
        $this->db->query($sql);
        try {
            $this->db->execute([$category]);
        }
        catch(Exception $e) {
            echo 'category is used';
        }
    }

    public function removeProduct($product){
        
        $sql = "DELETE FROM product WHERE productId = ?";
        $this->db->query($sql);
        try {
            $this->db->execute([$product]);
        }
        catch(Exception $e) {
            echo $e;
        }
    }
}