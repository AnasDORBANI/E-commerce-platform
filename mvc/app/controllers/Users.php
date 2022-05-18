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
        //$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

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
        $user = $this->userModel->findUserByEmailOrUsername($data['username']);

        if ($user){
            if (password_verify($data['password'],$user['Password'])){
                session_start();
                $_SESSION['user'] = $data["username"];
                redirect('home');
            }
        }
        
        //$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    }

    public function register (){
        $this->view('register/index',['title' => 'Register']);

        $data = [
            'firstName' => trim($_POST['fName']),
            'lastName' => trim($_POST['lName']),
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'sexe' => trim($_POST['sexe']),
            'address' => trim($_POST['address']),
            'birthDay' => trim($_POST['bDay']),
            'username' => trim($_POST['username']),
        ];

        

        

    }

    public function logout (){
        session_start();
        session_unset();
        session_destroy();
        $this->view('login/index',['title' =>'Login']);
    }
}