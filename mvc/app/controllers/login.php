<?php

class Login extends Controller {
    public function index(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->view('login/index',['name' => $user->name]);
    }
}