<?php 

require "functions.php";

// require "router.php";

require "Database.php";

$config = require "./config.php";

$id = $_GET["id"];

$db = new Database($config['database']);
$posts = $db->query("select * from posts where id > :id", ['id' => $id])->fetchAll();
$posts_greater_than_1 = $db->query("select * from posts where id = ?", [ $id ])->fetch();

dd(
    [
        'posts' => $posts,
        'posts_greater_than_1' => $posts_greater_than_1,
    ],
);