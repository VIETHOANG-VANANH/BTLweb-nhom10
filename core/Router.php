
<?php
$controller = $_GET['controller'] ?? 'auth';
$action = $_GET['action'] ?? 'login';

$controllerName = ucfirst($controller) . 'Controller';
$path = "app/controllers/$controller/$controllerName.php";

if (file_exists($path)) {
    require_once $path;
    $ctrl = new $controllerName();
    if (method_exists($ctrl, $action)) {
        $ctrl->$action();
    } else {
        echo "Không tìm thấy action.";
    }
} else {
    echo "Không tìm thấy controller.";
}
