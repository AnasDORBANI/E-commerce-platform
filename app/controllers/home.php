<?php

require_once ROOTPATH."models/Product.php";

class Home extends Controller
{
    public function __construct(){
        $this->homeModel = $this->model('Product');
    }

    public function index($name = '')
    {
        $products = $this->homeModel->latestProducts();
        $active = ["active",'','',''];
        $this->view('main/home/index',['products'=>$products, 'active'=>$active, 'title'=>'Home']);
    }

    public function products(){
        $products = $this->homeModel->allProducts();
        $active = ["",'active','',''];
        $this->view('main/products/index',['products'=>$products, 'active'=>$active,'title'=>'Our Products']);

    }

    public function product($data){
        $product = $this->homeModel->oneProduct($data);
        $this->view('main/product/index',['product'=>$product, 'title'=>'Product']);
    }

    public function about(){
        $active = ["",'','active',''];
        $this->view('main/about/index',['product'=>$product,'active'=>$active, 'title'=>'About Us']);
    }

    public function contact(){
        $active = ["",'','','active'];
        $this->view('main/contact/index',['product'=>$product, 'active'=>$active, 'title'=>'Contact Us']);
    }

    public function search(){
        $products = $this->homeModel->search($_GET['keywords']);
        $this->view('main/search/index',['products'=>$products, 'title'=> 'Search | '.$_GET['keywords']]);
    }

    public function cart(){
        session_start();
        $products = $this->homeModel->getCart($_SESSION['user']);
        $this->view('main/cart/index',['title'=>'Cart', 'products'=>$products]);
    }

    public function addToCart($product){
        $this->homeModel->addToCart($product);
        redirect('home/cart');
    }

    public function removeFromCart($cart_id){
        $this->homeModel->removeFromCart($cart_id);
        redirect('home/cart');
    }

    public function payement($product){
        $this->view('main/payement/index');
    }

    public function checkPayement(){
        $this->homeModel->checkPayement();
        $valid = true;
        $this->view('main/payement/valid',['valid'=>$valid]);
    }
}