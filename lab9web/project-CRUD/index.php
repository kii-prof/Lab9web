<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/helpers/functions.php';

$routes = [
    'dashboard'     => __DIR__ . '/views/dashboard.php',
    'barang/list'   => __DIR__ . '/modules/user/list.php',
    'barang/add'    => __DIR__ . '/modules/user/add.php',
    'barang/edit'   => __DIR__ . '/modules/user/edit.php',
    'barang/delete' => __DIR__ . '/modules/user/delete.php',
];

$page = $_GET['page'] ?? 'dashboard';

if (!is_string($page) || !array_key_exists($page, $routes)) {
    http_response_code(404);
    $contentFile = __DIR__ . '/views/404.php';
} else {
    $contentFile = $routes[$page];
}

ob_start();
require $contentFile;
$content = ob_get_clean();

require_once __DIR__ . '/views/header.php';
echo $content;
require_once __DIR__ . '/views/footer.php';
