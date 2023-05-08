<?php 

function dd($value){

    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();

}

function is_uri_path($uri){

    return parse_url($_SERVER["REQUEST_URI"])["path"] === $uri;

}

function get_classname_from_uri_path($uri){
    return is_uri_path($uri) ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white";
}

function authorize($isAuthorized, $status = Request::UNAUTHORISED){
    if(! $isAuthorized){
        abort($status);
    }
}