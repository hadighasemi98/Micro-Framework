<?php

use App\Core\Routing\Route;
use App\Middlewares\BlockFireFox;
use App\Middlewares\BlockIE;
use App\Middlewares\GlobalMiddleware;

# Inspired of Laravel

Route::get("/null"); 

Route::get("/",function(){echo "Home"; }  )  ; 

// Route::get("/post/{archive}/gallery/{category-id}/526" ,"PostController@get" )  ; 
Route::get("/post/{slug}" ,"PostController@get" ) ; 
Route::get("/post/{slug}/comments/{Cid}" ,"PostController@get" )  ; 

Route::post("/product/{mobile}/comments/{Cid}" ,"PostController@pro" )  ; 




Route::post("/home" ,"HomeController@index", [BlockFireFox::class,BlockIE::class]); 

Route::get("/blue" ,"BlueController@index" ); 

Route::put("/last-posts" ,"LastsController@get" ); 
