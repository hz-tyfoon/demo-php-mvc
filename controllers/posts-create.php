<?php 

require "Validator.php";

$heading = "Create New Post";

// dd(Validator::email("hanzalawpdeveloper.com"));

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $config = require "./config.php";
    $db = new Database($config['database']);
    
    $user_id = 3;
    $title = $_POST['title'];

    $errors = [];

    if(Validator::string($title, 1, 300)){
        $errors['title'] = "title of no more than 300 charecters is required & title cnnot be empty";
    }


    if(empty($errors)){
        $db->query("INSERT INTO `demo-mvc`.`posts` (`title`, `user_id`) VALUES (:title, :user_id)", ['title' => $title, 'user_id' => $user_id]);
    }

}

require_once "views/posts-create.view.php";