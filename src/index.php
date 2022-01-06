<?php
session_start();

$controller = isset($_GET['controller'])
    ? $_GET['controller'] : 'giangvien';
//lấy ra action
$action = isset($_GET['action']) ? $_GET['action'] :
    'index';
print_r($controller);
print_r($action);


$controller = ucfirst($controller);

$fileController = $controller . "Controller.php";
print_r($fileController);

$pathController = "controllers/$fileController";
print_r($pathController);

if (!file_exists($pathController)) {
    die("Trang bạn tìm không tồn tại");
}
require_once "$pathController";

$classController = $controller."Controller";
$object = new $classController();
if (!method_exists($object, $action)) {
    die("Phương thức $action
     không tồn tại trong class $classController");
}
$object->$action();
?>