<?php
// Require toàn bộ file Commons
 require_once '../commons/function.php';
 // Require toàn bộ file Controllers
 require_once 'controllers/dashboardController.php';
 require_once './controllers/productController.php';
 // Require toàn bộ file Models

 // Route
$act = $_GET['act'] ?? '/';
match ($act) {
    // Trang chủ quản trị
    '/' => (new dashboardController)->dashboard(),
    'list'=>( new Controller ())->list(),
    'insert'=>( new Controller ())->insert(),
    'update'=>( new Controller ())->update($_GET['id']),
    'delete'=>( new Controller ())->delete($_GET['id'])
}
?>