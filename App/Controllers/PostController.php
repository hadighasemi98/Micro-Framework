<?php

namespace App\Controllers ;

class PostController{

    public function get()
    {
        // view("posts/laster");
        // echo "helloooo";
        global $request ;
        // echo $request->slug;
        echo ($request->get_route_param('slug') );
        // echo ($request->get_route_param('Cid') );
        // var_dump($request->Cid );

    }

    public function pro()
    {
        global $request ;
        // echo $request->slug;
        echo ($request->get_route_param('mobile') );
        echo ($request->get_route_param('Cid') );
        // echo ($request->get_route_param('Cid') );
        // var_dump($request->Cid );

    }
    
}