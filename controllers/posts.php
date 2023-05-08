<?php 

$heading = "My posts";


$config = require "./config.php";

$db = new Database($config['database']);
$posts = $db->query("select * from posts")->fetchAll();

require_once "views/posts.view.php";