<?php
namespace App\Core\Routing;

use App\Core\Request;
use Exception;

class Router {

    private $request ;
    private $routes ;
    private $current_route ;

    public function __construct()
    { 
        $this->request = new Request();
        $this->routes = Route::routes() ;
        $this->current_route = $this->findRoute($this->request);
        // var_dump( $this->current_route);

        # Middleware
        $this->run_middleware() ;
    }
    private function run_middleware(){
        $middleware = $this->current_route['middleware'];

        foreach ($middleware as $middleware_class) {
            // if (class_exists($middleware_class)) {
                $class = new $middleware_class ;
                $class->handle() ;
            // }
        }
        // var_dump( $this->current_route);
    }
    
    public function findRoute($request)
    {
        // echo $request->get_uri() . "-" . $request->get_method();

        foreach($this->routes as $route){

            if( in_array( $request->get_method() , $route['method'] ) 
                and $request->get_uri() == $route['uri'] )
            {
                return $route ;
            }
        }
        return null;

    }

    public function invalidMethod($request){ 

        foreach($this->routes as $route){
            
            if( !in_array( $request->get_method() , $route['method'] ) 
                and $request->get_uri() == $route['uri'] )
                {
                    return $this->dispatch405() ;
                }
        }
    }

    public function invalidUri($uri){ 

        foreach($this->routes as $route){

            if( ($uri->get_uri() == $route['uri']) )
            {
                return $route ;
            }
        }
        return $this->dispatch404() ;
    }


    public function dispatch404(){ 
        header("HTTP/1.1 404 Not Found");
        view("errors/404");
        die();
    }

    public function dispatch405(){ 
        header("HTTP/1.0 405 Method Not Allowed");
        view("errors/405");
        die();
    }

    public function dispatch($route)
    {
        # action : null
        $action = $route['action'] ?? null;
        if(is_null($action) and empty($action)){
            return;
        }

        # action : clousure
        if(is_callable($action)){
            $action();
        }

        # action : Controller@index
        if(is_string($action)){
            $action = explode("@",$action);
        }

        # action : ['Controller','index']
        if(is_array($action)){

            $class_name = "App\\Controllers\\" . $action[0];
            
            if(!class_exists($class_name)){
                throw new Exception("Class not exist");
            }
                
            $controller = new $class_name();
            
            $method_name = $action[1];
            if(!method_exists($controller ,$method_name))
                throw new Exception("Method not exist");

            $controller->{$method_name}();

        }
    }

    public function run()
    {
        # Error 404
        $this->invalidUri($this->request);

        # Error 405
        $this->invalidMethod($this->request);

        # Run the Router
        $this->dispatch($this->current_route);
        
    }
}