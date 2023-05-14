<?php

use Core\App;

$db = APP::resolve(Core\Database::class);

$id = isset($_GET['id']) ? $_GET['id'] : false;

if(! $id){
    abort();
}

$todoItem = $db->query("select * from todos where id = :id", ['id' => $id])->findOrFail();

view("edit.view.php", [
    'id' => $id,
    'title' => isset($todoItem['title']) ? $todoItem['title'] : "",
    'description' => isset($todoItem['description']) ? $todoItem['description'] : "",
    'deadline' => isset($todoItem['deadline']) ? date('Y-m-d\TH:i', strtotime($todoItem['deadline'])) : "",
]);
