<?php 

use Core\App;
use Core\Validator;

$errors = [];

$db = APP::resolve(Core\Database::class);

$title = $_POST['title'];
$description = $_POST['description'];
$deadline_date_time = $_POST['deadline_date_time'];
$has_deadline = ! empty($deadline_date_time);
if($has_deadline){
    $deadline = date('Y-m-d H:i:s', strtotime($deadline_date_time));
}

if(!Validator::string($title, 1, 100)){
    $errors['title'] = "title of no more than 100 charecters is required & title cnnot be empty";
}

if(!Validator::string($description, 1, 500)){
    $errors['description'] = "description of no more than 500 charecters is required & title cnnot be empty";
}

if( ! empty($errors) ){
    $todos = $db->query("select * from todos")->getAll();
    return view("index.view.php", [
        "todos" => $todos,
        "errors" => $errors,
    ]);
}

$currentDateTime = date('Y-m-d H:i:s');
$values = [
    'title' => $title, 
    'description' => $description,
    'created_at' => $currentDateTime,
    'updated_at' => $currentDateTime,
];

if($has_deadline){
    $values['deadline'] = $deadline;
}

$query = "INSERT INTO `todos` (`title`, `description`, `created_at`, `updated_at`" . ($has_deadline ? ", `deadline`" : "") . " ) VALUES (:title, :description, :created_at, :updated_at" . ($has_deadline ? ", :deadline " : "") . " )";

$db->query($query, $values);

header("location: /");
