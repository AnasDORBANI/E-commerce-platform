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
        $this->db->query("SELECT * FROM client WHERE userName='".$username."'");
        $row = $this->db->single();
        //Check user
        if($this->db->rowCount() > 0){
            return $row;
        } else {
            return false;
        }
    }

    public function addUser($data = []){
        $this->query("INSERT INTO client(userName,Password,Nom,Prenom,Genre,Email,Profil,Adresse,DateNaissance) VALUES (:userName,:Password,:Nom,:Prenom,:Genre,:Email,Profil,Adresse,DateNaissance)");

        $this->db->bind(':userName',$data['username']);
        $this->db->bind(':Password',$data['password']);
        $this->db->bind(':Nom',$data['firstName']);
        $this->db->bind(':Prenom',$data['lastName']);
        $this->db->bind(':Genre',$data['sexe']);
        $this->db->bind(':Email',$data['email']);
    }
}