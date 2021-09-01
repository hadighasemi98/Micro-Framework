<?php

namespace App\Controllers ;

use App\Models\User;

class HomeController{

    public function index()
    {
        $data = [
            "title" => "Home page" ,
            "FirstPost" => "Hello world 2!" 
        ];      

        view("html/index",$data); 
    }
    
}