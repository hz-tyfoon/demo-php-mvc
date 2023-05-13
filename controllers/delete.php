<?php 

use Core\App;

$db = APP::resolve(\Core\Database::class);


$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);

$result = $db->query("delete from todos where id = :id", [ 'id' => $data['todoId'] ]);

header('location: /');
die();