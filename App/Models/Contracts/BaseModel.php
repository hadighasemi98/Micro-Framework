<?php

namespace App\Models\Contracts;

abstract class BaseModel implements CrudInterface{

    protected $connection ;
    protected $table ;
    protected $primary_key = 'id' ;
    protected $where = 10 ;
    protected $page = 10 ;
    protected $attributes = [] ;

    public function __construct()
    {
        
    }

    public function get_attributes($key)
    {
        if( !$key || !array_key_exists($key , $this->attributes) )
            return null ;
            
        return $this->attributes[$key];
    }

    public function __get($key)
    {
       return $this->get_attributes($key);
    }

}