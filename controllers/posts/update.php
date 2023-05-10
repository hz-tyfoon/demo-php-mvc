<?php 

use Core\App;
use Core\Validator;

$db = App::resolve(\Core\Database::class);

$id = $_POST["id"];
$title = $_POST["title"];
$user_id = 3;

$post = $db->query("select * from posts where id = :id", ['id' => $id])->findOrFail();

authorize( $post['user_id'] === $user_id );


if (!Validator::string($title, 1, 300)) {
    $errors['title'] = "title of no more than 300 charecters is required & title cnnot be empty";
    $post['title'] = ! empty(trim($_POST['title'])) ? $_POST['title'] : $post['title'];
}

if (! empty($errors)) {
    return view("posts/edit.view.php", [
        "heading" => "Edit Post",
        "errors" => $errors,
        "post" => $post
    ]);
}

$post = $db->query("update posts set title = :title where id = :id", ['title' => $title, 'id' => $id]);

header("location: /posts");
die();


