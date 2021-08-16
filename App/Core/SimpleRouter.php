<?php
namespace App\Core;

use App\Utilities\Url;

class SimpleRouter {
    private $route ;

    public function __construct()
    {
        $this->route = [

            '/color/red'   => 'html/red.php',
            '/color/green' => 'html/green.php',
            '/color/blue'  => 'html/blue.php'
        ];
    }   

    public function run()
    { 
        $current_route = Url::current_route();

        foreach ($this->route as $key => $value){
            if ($key == $current_route){
                $this->includeAndDie( BASE_PATH . "Views/$value") ;
                die();
            }
        }
        # 404 Error
        header("HTTP/1.1 404 Not Found");
        $this->includeAndDie (BASE_PATH . "Views/html/404.php");
    }

    public function includeAndDie($view)
    {
        include $view ;
    }

}



