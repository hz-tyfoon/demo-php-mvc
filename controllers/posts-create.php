<?php 

$heading = "Create New Post";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $config = require "./config.php";
    $db = new Database($config['database']);
    
    $user_id = 3;
    $title = $_POST['title'];
    $posts = $db->query("INSERT INTO `demo-mvc`.`posts` (`title`, `user_id`) VALUES (:title, :user_id)", ['title' => $title, 'user_id' => $user_id]);

}

require_once "views/posts-create.view.php";