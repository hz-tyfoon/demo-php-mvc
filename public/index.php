<?php 


const BASE_PATH = __DIR__ . "/.." ;

require BASE_PATH . "/Core/functions.php";
// dd(BASE_PATH);

spl_autoload_register(function($class){
    require_once basePath("Core/{$class}.php");
});

require_once basePath("index.php");
