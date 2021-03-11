<?php

/*
 | Retrieves the browser URI.
 |
*/
$uri = $_SERVER['REQUEST_URI'];

/*
 | Divide by separating by "/".
 |
*/
$uri = explode('/', $uri);

/*
 | Loads the configuration file.
 |
*/
require_once 'config.php';

/*
 | Loads the main controller.
 |
*/
require_once 'controller/Main.php';

/*
 | Convert special characters to HTML entities.
 |
*/
$controller = htmlspecialchars($uri[PATH_SIZE]);

/*
 | If a controller is not specified, assigns the
 | main controller to the $controller variable
 |
 | If the controller exists for the time being it
 | does nothing.
 |
 | If the controller does not exist it redirects
 | to page 404
 |
*/
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

/*
 | Knowing that the controller name is valid we
 | import it.
 |
*/
require_once 'controller/'.$controller.'.php';

/*
 | Create a instance of the object.
 |
*/
$app = new $controller;


/*
 | If a value is passed in the URL after the controller,
 | that value will be considered the controller method,
 | and the code block is executed.
 |
 | Outherwise the index method is called.
 |
*/
if(isset($uri[PATH_SIZE+1]))
{
    /*
    | Convert special characters to HTML entities.
    |
    */
    $method = htmlspecialchars($uri[PATH_SIZE+1]);

    /*
    | If a value is passed in the URL after the method,
    | that value will be considered a parameter,
    | and the code block is executed.
    |
    | Outherwise if the method exists it is called.
    |
    */
    if(isset($uri[PATH_SIZE+2]))
    {
        /*
         | If the method exists it is called and the
         | parameters are passed as an argument.
         | 
         | Outherwise the 404 page is called.
         |
        */
        if(method_exists($app, $method))
        {
            $param = htmlspecialchars($uri[PATH_SIZE+2]);
        
            $app->$method($param);
        }
        else
        {
            header('Location: '.HOST.'/erro404');

            die;
        }
    }
    else
    {
        /*
         | If the method exists it is called.
         |
         | Outherwise the 404 page is called.
         |
        */
        if(method_exists($app, $method))
        {
            $app->$method();
        }
        else
        {
            header('Location: '.HOST.'/erro404');

            die;
        }
    }
}
else
{
    $app->index();
}