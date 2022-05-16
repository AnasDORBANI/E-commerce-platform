<?php

class Home extends Controller
{
    public function index($name = '')
    {
        $this->view('home/index',['name' => $user->name, 'title' => "Home"]);
    } 
}