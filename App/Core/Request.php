<?php
namespace App\Core;

// use App\Utilities\Url;

class Request {

    private $agent ;
    private $ip ;
    private $params ;

 
    public function __construct()
    {
        $this->agent = $_SERVER['HTTP_USER_AGENT'] ;
        $this->ip    = $_SERVER['SERVER_ADDR'];  ;
        $this->params = $_REQUEST ;
    }
    
    // public function __get($param)
    // {

    //     $url = $_SERVER['REQUEST_URI'] ;
        
    //     $url_components = parse_url($url) ;
        
    //     parse_str($url_components['query'], $params) ;
        
    //     // Display result
    //     return $params[$param] ;

    // }

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

    public function parse_str($params)
    {
        // Initialize URL to the variable
        $url = $_SERVER['REQUEST_URI'] ;
        
        // Use parse_url() function to parse the URL
        // and return an associative array which
        // contains its various components
        $url_components = parse_url($url) ;
        
        // Use parse_str() function to parse the
        // string passed via URL
        parse_str($url_components['query'], $params) ;
        
        // Display result
        echo ' Hi '.$params['type'] ;
    }
}



