<?php 

$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");
$router->get("/posts", "controllers/posts/index.php");
$router->get("/posts/create", "controllers/posts/create.php");
$router->post("/posts/create", "controllers/posts/create.php");
$router->get("/post", "controllers/posts/show.php");
