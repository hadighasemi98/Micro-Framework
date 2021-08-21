<?php

namespace App\Middlewares;
use hisorange\BrowserDetect\Parser as Browser;

use App\Middlewares\Contracts\MiddlewareInterface;

class BlockFireFox implements MiddlewareInterface {

    public function handle()
    {    
        Browser::isChrome() ? die('Chrome was Blocked ! use another IDE') : null ;
    }
}