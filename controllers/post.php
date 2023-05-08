<?php 

$heading = "Single post";


$config = require "./config.php";

$id = $_GET["id"];

$db = new Database($config['database']);
$post = $db->query("select * from posts where id = :id", ['id' => $id])->fetch();

require_once "views/post.view.php";