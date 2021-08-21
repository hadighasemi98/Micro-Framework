<?php
namespace App\Core;

// use App\Utilities\Url;

class Request {

    private $agent ;
    private $ip ;
    private $uri ;
    private $params ;
    private $method ;

 
    public function __construct()
    {
        $this->agent  = $_SERVER['HTTP_USER_AGENT'] ;
        $this->ip     = $_SERVER['SERVER_ADDR'];  ;
        $this->uri    = strtok($_SERVER['REQUEST_URI'] , '?') ;
        $this->params = $_REQUEST ;
        $this->method = strtolower($_SERVER['REQUEST_METHOD']) ;
    }


    public function __get(string $param)
    {
        if (array_key_exists($param, $this->params)) {
            return $this->params[$param];
        }
    }

    public function get_agent()
    {
        return $this->agent ;
    }

    public function get_ip()
    {
        return $this->ip ;
    }

    public function get_params()
    {
        return $this->params ;
        
    }

    public function get_uri()
    {
        return $this->uri ;
        
    }

    public function get_method()
    {
        return $this->method ;
        
    }


}



