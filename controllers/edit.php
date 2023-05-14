<?php

use Core\App;

$db = APP::resolve(Core\Database::class);

$id = isset($_GET['id']) ? $_GET['id'] : false;

dd("--did hit the update controller with id = {$id}");
