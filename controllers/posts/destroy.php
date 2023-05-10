<?php 


use Core\Database;

$config = require basePath("config.php");

$id = $_POST["id"];
$user_id = 5;

$db = new Database($config['database']);
$post = $db->query("select * from posts where id = :id", ['id' => $id])->findOrFail();

authorize( $post['user_id'] === $user_id );

$db->query("delete from posts where id = :id", ['id' => $id]);

header('location: /posts');

