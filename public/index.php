<?php 


const BASE_PATH = __DIR__ . "/.." ;

require BASE_PATH . "/Core/functions.php";
// dd(BASE_PATH);

spl_autoload_register(function($class){
    
    $class = str_replace("\\", "/", $class);

    require_once basePath("{$class}.php");
});

$config_file = basePath("config.php");
if(!file_exists($config_file)){
    require_once basePath("install.php");
    die();
}

require_once basePath("bootstrap.php");
require_once basePath("index.php");
