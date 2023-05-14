<?php

use Core\App;
use Core\Validator;

$db = APP::resolve(Core\Database::class);

$id = isset($_POST['id']) ? $_POST['id'] : "";
$title = isset($_POST['title']) ? $_POST['title'] : "";
$description = isset($_POST['description']) ? $_POST['description'] : "";
$deadline = isset($_POST['deadline_date_time']) ? $_POST['deadline_date_time'] : "";

$errors = [];
$datas = [
    'id' => $id,
    'title' => $title,
    'description' => $description,
    'deadline' => $deadline,
];

if(!Validator::string($title, 1, 100)){
    $errors['title'] = "title of no more than 100 charecters is required & title cnnot be empty";
}

if(!Validator::string($description, 1, 500)){
    $errors['description'] = "description of no more than 500 charecters is required & title cnnot be empty";
}

if( ! empty($errors) ){
    $datas['errors'] = $errors;
    return view("edit.view.php", $datas);
}

$updateQuery = "UPDATE todos SET title = :title, description = :description, deadline = :deadline WHERE id = :id";

$updateSuccess = $db->executeQuery($updateQuery, $datas);

if ($updateSuccess) {
    header("location: /");
} else {
    http_response_code('500');
    $errors['generic'] = 'update failed';
    $datas['errors'] = $errors;
    view("edit.view.php", $datas);
}
