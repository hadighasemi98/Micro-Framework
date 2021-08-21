<?php
namespace App\Core\Routing;

use Exception;

class Route {

    private static $routes = [];
    const HTTP_VERB = ["get","post","put","patch","delete","option"];
    
    # Global method
    public static function add($method , $uri ,$action = null)
    {
        $method = is_array($method) ? $method  : [$method];
        self::$routes[] = ["method" => $method , "uri" => $uri , "action" => $action] ;
    }

    public static function __callStatic($name , $argument)
    {

        if ( !in_array($name , self::HTTP_VERB) ){
            throw new Exception ("Http verb not supported") ;
        }
        // self::$routes[] = ["method" => $name , "uri" => $argument[0] , "action" => $argument[1]] ;
        $uri    = $argument[0] ?? null;
        $action = $argument[1] ?? null;
        self::add($name ,$uri , $action);
    }    
  

    public static function routes()
    {
        return self::$routes;
    }

}