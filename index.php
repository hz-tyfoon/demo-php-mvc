<?php 

require "functions.php";

// require "router.php";

require "Database.php";

$config = require "./config.php";

$db = new Database($config['database']);
$posts = $db->query("select * from posts")->fetchAll();
$posts_greater_than_1 = $db->query("select * from posts")->fetch();

dd(
    $posts,
    // $posts_greater_than_1
);