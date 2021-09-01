<?php

use App\Core\Routing\Route;
use App\Middlewares\BlockFireFox;
use App\Middlewares\BlockIE;
use App\Middlewares\GlobalMiddleware;

# Inspired of Laravel

Route::get("/null"); 

Route::get("/","HomeController@index" )  ; 

// Route::get("/post/{slug}" ,"PostController@get" ) ; 






