<?php 

$heading = "My posts";


$config = require "./config.php";

$user_id = 3;

$db = new Database($config['database']);
$posts = $db->query("select * from posts where user_id = :user_id", ['user_id' => $user_id])->fetchAll();

require_once "views/posts.view.php";