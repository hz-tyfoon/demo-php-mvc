<?php 

$router = new \Core\Router();

require basePath( "routes.php" );

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$method = isset( $_POST['__request_method'] ) ? $_POST['__request_method'] : $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);