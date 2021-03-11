<?php

$controller = $_SERVER['REQUEST_URI'];
$controller = explode('/', $controller);

require_once 'config.php';
require_once 'controller/Main.php';

if(file_exists('controller/'.$controller[PATH_SIZE].'.php'))
{
    require_once 'controller/'.$controller[PATH_SIZE].'.php';
}
else
{
    header('Location: erro404');

    die;
}

$app = new $controller[PATH_SIZE];
$app->index();