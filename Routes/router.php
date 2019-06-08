<?php

function router($url, $controller = []){

    if($url == $_SERVER['REQUEST_URI']){
        require_once  __ROOT__.'/Controller/'.$controller[0];
        $function = $controller[1];
        $function();
    }
}

