<?php

use App\Core\SimpleRouter;
use App\Utilities\Assets;
use App\Utilities\Url;
use App\Core\Request;

include "Bootstrap/init.php";
// echo $_SERVER['REQUEST_URI'];
// echo site_url("post/21");

//  <link rel="stylesheet" href="<?= assets_url('css/style.css')"> 

// echo random_element(['1,34,56,47,567,fgh,678gh,fghrdg,sdgdfg,dfg,fdg','asdasdasdasdasd',1,2,34,25,345,4565,7,567,5675678]);

# get path
// echo Assets::js("file.js");
// echo Assets::js("bootstrap.js");
// echo Assets::get("JS/bootstrap.js");

# Router
// $route = Url::current_route();

// $Router = new SimpleRouter();
// $Router->run();

$request = new Request();
    
echo($request->name ) ;
