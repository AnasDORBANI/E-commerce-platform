<?php

require_once ROOTPATH."models/User.php";

class Users extends Controller {

    public function __construct () {
        $this->userModel = $this->model('User');
    }

    public function index(){
        $this->view('login/index',['title' => 'Login']);
    }

    public function login (){
        $this->view('login/index',['title' => 'Login']);
        //Snitize post data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data = [
            'username' => trim($_POST['username']),
            'password' => trim($_POST['password'])
        ];

        //Validate Input
        if (empty($data['username']) || empty($data['password'])){
            echo "please enter your email or password";
        } 
        
        //Search for the user
        $user = json_decode(json_encode($this->userModel->findUserByEmailOrUsername($data['username'])),true);
        if ($user){
            if (password_verify($data['password'],$user['password'])){
                session_start();
                $_SESSION['user'] = $data["username"];
                redirect('home');
            }
        }
        
        //$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    }

    public function register (){
        $this->view('register/index',['title' => 'Register']);
    }

    public function logout (){
        session_start();
        session_unset();
        session_destroy();
        $this->view('login/index',['title' =>'Login']);
    }
}