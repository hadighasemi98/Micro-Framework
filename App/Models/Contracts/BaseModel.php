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

        return $this->attributes[$key];
    }

}