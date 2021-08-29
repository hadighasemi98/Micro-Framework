<?php

use App\Core\Routing\Route;
use App\Middlewares\BlockFireFox;
use App\Middlewares\BlockIE;
use App\Middlewares\GlobalMiddleware;

# Inspired of Laravel

Route::get("/null"); 

Route::get("/","HomeController@index" )  ; 
Route::get("/home" ,"HomeController@index"); 

Route::get("/blue" ,"BlueController@index" ); 

Route::put("/last-posts" ,"LastsController@get" ); 

// Route::get("/post/{archive}/gallery/{category-id}/526" ,"PostController@get" )  ; 
Route::get("/post/{slug}" ,"PostController@get" ) ; 
Route::get("/post/{slug}/comments/{Cid}" ,"PostController@get" )  ; 

Route::post("/product/{mobile}/comments/{Cid}" ,"PostController@pro" )  ; 





