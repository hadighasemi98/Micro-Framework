<?php

namespace App\Controllers ;

use App\Models\User;

class HomeController{

    public function index()
    {
         var_dump((new User())->get(["name"],["id"=>1]));
        // $name = ;
        // var_dump($name);
        $data = [
            "title" => "Home page" ,
            "FirstPost" => "Hello world 2!" ,
            // "autherName" => $name 
        ];      

        view("html/index",$data);
    }
    
}