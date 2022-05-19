<?php

require_once ROOTPATH."models/Product.php";

class Home extends Controller
{
    public function __construct(){
        $this->userModel = $this->model('Product');
    }

    public function index($name = '')
    {
        $products = $this->userModel->latestProducts();
        $active = ["active",'','',''];
        $this->view('home/index',['products'=>$products, 'active'=>$active, 'title'=>'Home']);
    }

    public function products(){
        $products = $this->userModel->allProducts();
        $active = ["",'active','',''];
        $this->view('products/index',['products'=>$products, 'active'=>$active,'title'=>'Our Products']);

    }

    public function product($data){
        $product = $this->userModel->oneProduct($data);
        $this->view('product/index',['product'=>$product, 'title'=>'Product']);
    }

    public function about(){
        $active = ["",'','active',''];
        $this->view('about/index',['product'=>$product,'active'=>$active, 'title'=>'About Us']);
    }

    public function contact(){
        $active = ["",'','','active'];
        $this->view('contact/index',['product'=>$product, 'active'=>$active, 'title'=>'Contact Us']);
    }
}