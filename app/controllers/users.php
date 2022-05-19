<?php

class Users extends Controller {

    private function __construct () {
        $this->userModel = $this->model('User');
    }

    public function login (){
        $user = $_POST['user'];
        $password  = $_POST['passowrd'];

        

    }
}