<?php

use App\Core\Routing\Route;
use App\Middlewares\BlockFireFox;
use App\Middlewares\BlockIE;

// include "vendor/autoload.php";

Route::get("/null"); // Inspired of Laravel

Route::post("/",function(){echo "welcome"; } ); 

Route::get("/home" ,"HomeController@index",[BlockFireFox::class,BlockIE::class]); 

Route::get("/blue" ,"HomeController@index" ); 

Route::put("/last-posts" ,"LastsController@get" ); 
