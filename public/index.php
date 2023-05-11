<?php 


const BASE_PATH = __DIR__ . "/.." ;

require BASE_PATH . "/Core/functions.php";
// dd(BASE_PATH);

if(!file_exists(basePath("config.php"))){
    return view("setup_config.view.php");
}

spl_autoload_register(function($class){
    
    $class = str_replace("\\", "/", $class);

    require_once basePath("{$class}.php");
});

require_once basePath("bootstrap.php");
require_once basePath("index.php");
