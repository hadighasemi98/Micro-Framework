<?php
namespace App\Utilities;

class Url{

    public static function current_route()
    {
        $route = strtok($_SERVER['REQUEST_URI'],'?');
        return $route;

    }



}

// Assets::css('/style.css');
// Assets::js('/JS.js');
// Assets::img('/style.png');