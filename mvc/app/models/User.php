<?php

require_once ROOTPATH."core/Database.php";

class User
{
    private $db;

    public function __construct(){
        $this -> db = new Database;

    }

    //Find user by email or username
    public function findUserByEmailOrUsername($username = '', $email = ''){
        $this->db->query("SELECT * FROM Users WHERE login='".$username."'");
        $row = $this->db->single();
        //Check user
        if($this->db->rowCount() > 0){
            return $row;
        } else {
            return false;
        }
    }
}