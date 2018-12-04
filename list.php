<?php

require __DIR__ . '/model.php';

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$perPage = isset($_GET['per_page']) ? $_GET['per_page'] : 4;

sleep(1);

echo json_encode([
    'entities' => getItems($page, $perPage),
    'total' => getTotal(),
]);