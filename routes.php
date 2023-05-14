<?php 

$router->get("/", "controllers/index.php");
$router->post("/", "controllers/create.php");
$router->delete("/todos", "controllers/delete.php");
$router->patch("/todos", "controllers/edit.php");
// $router->get("/about", "controllers/about.php");
// $router->get("/contact", "controllers/contact.php");

// $router->get("/posts", "controllers/posts/index.php");
// $router->post("/posts", "controllers/posts/store.php");

// $router->get("/posts/create", "controllers/posts/create.php");

// $router->get("/post/edit", "controllers/posts/edit.php");
// $router->get("/post", "controllers/posts/show.php");
// $router->patch("/post", "controllers/posts/update.php"); 
// $router->delete("/post", "controllers/posts/destroy.php");
