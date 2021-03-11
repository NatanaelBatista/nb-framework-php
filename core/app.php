<?php

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);

require_once 'config.php';
require_once 'controller/Main.php';

$controller = htmlspecialchars($uri[PATH_SIZE]);

if($controller == '')
{
    $controller = MAIN_CONTROLLER;
}
elseif(file_exists('controller/'.$controller.'.php'))
{
    //
}
else
{
    header('Location: erro404');

    die;
}

require_once 'controller/'.$controller.'.php';

$app = new $controller;
$app->index();