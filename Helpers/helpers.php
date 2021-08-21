<?php

function site_url($uri){
    return $_ENV['base_url'] . $uri ;
}

function assets_url($uri){
    return site_url('assets/'.$uri)  ;
}

function random_element($arr){ 
    shuffle($arr);
    return array_pop($arr);
}

function view($path){ 

    include BASE_PATH . "Views/" . $path . ".php";

}

