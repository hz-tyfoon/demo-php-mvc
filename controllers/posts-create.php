<?php 

$heading = "Create New Post";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    dd($_POST);
}

require_once "views/posts-create.view.php";