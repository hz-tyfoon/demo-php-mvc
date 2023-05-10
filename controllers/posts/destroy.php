<?php 

use Core\App;

$db = App::resolve(\Core\Database::class);

$id = $_POST["id"];
$user_id = 3;
$post = $db->query("select * from posts where id = :id", ['id' => $id])->findOrFail();

authorize( $post['user_id'] === $user_id );

$db->query("delete from posts where id = :id", ['id' => $id]);

header('location: /posts');

