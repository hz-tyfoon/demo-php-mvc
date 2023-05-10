<?php 

use Core\App;

$db = App::resolve(\Core\Database::class);

$id = $_GET["id"];
$user_id = 3;

$post = $db->query("select * from posts where id = :id", ['id' => $id])->findOrFail();

authorize( $post['user_id'] === $user_id );


view("posts/edit.view.php", [
    "heading" => "Edit Post",
    "errors" => [],
    'post' => $post,
]);