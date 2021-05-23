<?php
require_once('connection.php');
// add comment

$controller = 'page';
$action = 'home';

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

$controller = ucfirst($controller);
$controllerFile = 'controllers/' . $controller . 'Controller.php';
if (is_file($controllerFile)) {
    include_once($controllerFile);
    $className = $controller . 'Controller';
    $controller = new $className;
    if (in_array($action, get_class_methods($controller))) {
        $controller->$action();
        return true;
    }
    var_dump($controller);die();
}
include_once('controllers/PageController.php');
$pageController = new PageController();
$pageController->error();