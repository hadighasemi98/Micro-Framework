<?php

namespace App\Controllers ;

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