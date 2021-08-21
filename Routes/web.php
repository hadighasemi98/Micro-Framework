<?php

use App\Core\Routing\Route;

// include "vendor/autoload.php";

Route::get("/null"); // Inspired of Laravel

Route::post("/",function(){echo "welcome" ; }); // Inspired of Laravel

Route::get("/home" ,"HomeController@index"); // Inspired of Laravel

Route::get("/blue" ,"HomeController@index" ); // Inspired of Laravel

Route::put("/last-posts" ,"LastsController@get" ); // Inspired of Laravel

// Route::POST("/save-form" ,"FormController@index" ); // Inspired of Laravel

// Route::kkk("/save-form" ,"FormController@index" ); // Inspired of Laravel

