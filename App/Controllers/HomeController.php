<?php

namespace App\Controllers ;

class HomeController{

    public function index()
    {
        $data = [
            "title" => "Home page" ,
            "FirstPost" => "Hello world !" 
        ];        
        view("html/index",$data);
    }
    
}