<?php

namespace App\Middlewares;

use App\Middlewares\Contracts\MiddlewareInterface;

class GlobalMiddleware implements MiddlewareInterface {

    public function handle()
    {    
         $this->is_USA();     
         $this->is_china();     
       
    }

    public function is_china()
    {
        die('access denied for china<br>');
    }

    public function is_USA()
    {
        die('access denied for U.S<br>');
    }

}