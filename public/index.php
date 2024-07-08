<?php
require '../vendor/autoload.php';
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();

require "../config/routes.php";

$match = $router->match();

if (is_array($match)) {

    if (is_callable($match['target'])) {
        call_user_func($match['target']);
    } else {
        ob_start();
        require "../templates/{$match['target']}.php";
        $pageContent = ob_get_clean();
    }
    require '../component/layout.php';
} else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    ob_start();
    require "../templates/404.php";
    $pageContent = ob_get_clean();
    require '../component/layout.php';
}
