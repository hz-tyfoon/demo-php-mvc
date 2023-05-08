<?php 

$heading = "Single post";


$config = require "./config.php";

$id = $_GET["id"];
$user_id = 3;

$db = new Database($config['database']);
$post = $db->query("select * from posts where id = :id", ['id' => $id])->fetch();

if( ! $post ){
    abort(Request::NOT_FOUND);
}

if( $post['user_id'] !== $user_id ){
    abort(Request::UNAUTHORISED);
}

require_once "views/post.view.php";