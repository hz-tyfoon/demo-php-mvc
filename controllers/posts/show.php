<?php 

use Core\Database;

$config = require basePath("config.php");

$id = $_GET["id"];
$user_id = 3;

$db = new Database($config['database']);
$post = $db->query("select * from posts where id = :id", ['id' => $id])->findOrFail();

authorize( $post['user_id'] === $user_id );

view("posts/show.view.php", [
    "heading" => "Single post",
    "post" => $post,
]);