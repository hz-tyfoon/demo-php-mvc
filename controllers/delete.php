<?php

use Core\App;

$db = APP::resolve(\Core\Database::class);

$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);
$idsToDelete = $data['todoIds'];
$placeholders = implode(',', array_fill(0, count($idsToDelete), '?'));

$sql = "DELETE FROM todos WHERE id IN ($placeholders)";

$affectedRows = $db->query($sql, $idsToDelete)->statement->rowCount();
http_response_code(200);

if ($affectedRows > 0) {
    echo json_encode([
        'success' => true,
        'message' => "{$affectedRows} Item deleted successfully"
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => "failed to delete"
    ]);
}

die();