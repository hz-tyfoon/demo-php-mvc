<?php 


const BASE_PATH = __DIR__ . "/.." ;

require BASE_PATH . "/Core/functions.php";

require BASE_PATH . '/vendor/autoload.php';

$config_file = basePath("config.php");
if(!file_exists($config_file)){
    require_once basePath("install.php");
    die();
}

require_once basePath("bootstrap.php");
require_once basePath("index.php");
