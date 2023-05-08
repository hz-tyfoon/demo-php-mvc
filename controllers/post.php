<?php 

$heading = "Single post";


$config = require "./config.php";

$id = $_GET["id"];
$user_id = 3;

$db = new Database($config['database']);
$post = $db->query("select * from posts where id = :id", ['id' => $id])->findOrFail();

authorize( $post['user_id'] === $user_id );

require_once "views/post.view.php";