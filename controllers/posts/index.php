<?php 

use Core\Database;

$config = require basePath("config.php");

$user_id = 3;

$db = new Database($config['database']);
$posts = $db->query("select * from posts where user_id = :user_id", ['user_id' => $user_id])->getAll();

view("posts/index.view.php", [
    "heading" => "My posts",
    "posts" => $posts,
]);