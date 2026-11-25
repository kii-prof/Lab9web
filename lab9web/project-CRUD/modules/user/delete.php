<?php
require_once dirname(__DIR__, 2) . '/config/database.php';

$id = $_GET['id'] ?? '';
if ($id !== '') {
    $sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
    mysqli_query($conn, $sql);
}

header('location: index.php?page=barang/list');
exit;
