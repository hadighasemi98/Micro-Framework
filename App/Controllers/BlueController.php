<?php

namespace App\Controllers ;

class BlueController{

    public function index()
    {
        $data = [
            "title" => "Blue page" ,
            "FirstPost" => "Hello world 2!" 
        ];        
        view("html/blue",$data);
    }
    
}