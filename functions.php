<?php 

function dd($value){

    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();

}

function is_uri($uri){

    return $_SERVER["REQUEST_URI"] === $uri;

}

function get_classname_from_uri($uri){
    return is_uri($uri) ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white";
}