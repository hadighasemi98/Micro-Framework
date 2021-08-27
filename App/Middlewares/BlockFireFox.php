<?php

namespace App\Middlewares;
use hisorange\BrowserDetect\Parser as Browser;

use App\Middlewares\Contracts\MiddlewareInterface;

class BlockFireFox implements MiddlewareInterface {

    public function handle()
    {    
        echo"BlockFireFox"."<br>";
        // Browser::isFirefox() ? die('Firefox was Blocked ! use another IDE') : null ;
    }
}