<?php

class User
{
    public function __construct(){
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        echo "connected";
    }
}