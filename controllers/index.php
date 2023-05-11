<?php 

use Core\App;

$db = APP::resolve(Core\Database::class);

$todos = $db->query("select * from todos")->getAll();

view("index.view.php", [
    "todos" => $todos,
]);