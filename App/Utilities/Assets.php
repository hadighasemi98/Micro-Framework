<?php
namespace App\Utilities;

class Assets{

    public static function get(string $route)
    {
        return $_ENV["base_url"] . "Assets/" . $route ;
    }

    public static function __callStatic($name, $arguments)
    {

        // return $_ENV["base_url"] . "Assets/" .
        //      $name.'/'. implode(', ', $arguments). PHP_EOL;

        return $_ENV["base_url"] . "Assets/" . $name ."/". $arguments[0] . PHP_EOL;
    }
    



}

// Assets::css('/style.css');
// Assets::js('/JS.js');
// Assets::img('/style.png');