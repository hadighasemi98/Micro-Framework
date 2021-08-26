<?php

use App\Core\Routing\Route;
use App\Middlewares\BlockFireFox;
use App\Middlewares\BlockIE;
use App\Middlewares\GlobalMiddleware;

# Inspired of Laravel

Route::get("/null"); 

Route::get("/",function(){echo "welcome"; }  )  ; 

Route::get("/home" ,"HomeController@index", [BlockFireFox::class,BlockIE::class]); 

Route::get("/blue" ,"BlueController@index" ); 

Route::put("/last-posts" ,"LastsController@get" ); 
