<?php

use Core\App;
use Core\Validator;

$db = App::resolve(\Core\Database::class);

$errors = [];

$user_id = 3;
$title = $_POST['title'];

if (!Validator::string($title, 1, 300)) {
    $errors['title'] = "title of no more than 300 charecters is required & title cnnot be empty";
}

if (! empty($errors)) {
    return view("posts/create.view.php", [
        "heading" => "Create New Post",
        "errors" => $errors,
    ]);
}

$db->query("INSERT INTO `demo-mvc`.`posts` (`title`, `user_id`) VALUES (:title, :user_id)", ['title' => $title, 'user_id' => $user_id]);

header('location: /posts');