<?php

namespace App\Middlewares;

use App\Middlewares\Contracts\MiddlewareInterface;
use hisorange\BrowserDetect\Parser as Browser;

class BlockIE implements MiddlewareInterface {

    public function handle()
    {    
        // Browser::isIE() ? die('IE was Blocked ! use another IDE') : null ;
        echo "BlockIE"."<br>";

    }

}