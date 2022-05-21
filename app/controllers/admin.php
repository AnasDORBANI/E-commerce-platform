<?php

require_once ROOTPATH."models/Product.php";

class Admin extends Controller
{
    public function __construct(){
        $this->adminModel = $this->model('AdminModel');
    }
    
    public function index(){
        $active=['active',''];
        $this->view('admin/dashboard/index',['title'=>'Dashboard','active'=>$active]);
    }

    public function products(){
        $active=['','active'];
        $products = $this->adminModel->getProducts();
        $categories = $this->adminModel->getCategories();
        $this->view('admin/products/index',['title'=>'Products', 'products'=>$products,'categories'=>$categories,'active'=>$active]);
    }

    public function addProduct(){
        $categories = $this->adminModel->getCategories();
        $this->view('admin/products/add-product',['categories'=>$categories,'title'=>'Add Product']);
    }

    public function setProduct(){
        $this->adminModel->setProduct($_POST);
        redirect('admin/products');
    }

    public function addCategory(){
        $this->adminModel->addCategory($_GET['category']);
        redirect('admin/products');
    }

    public function removeCategory($category){
        $this->adminModel->removeCategory($category);
        redirect('admin/products');
    }

    public function removeProduct($product){
        $this->adminModel->removeProduct($product);
        redirect('admin/products');
    }
}