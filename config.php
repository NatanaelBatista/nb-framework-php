<?php

/*
 |-----------------------------------------------------------------
 | PATH
 |-----------------------------------------------------------------
 | Defines the application domain.
 |
 |
*/
define('PATH', $_SERVER['SERVER_NAME']);

/*
 |-----------------------------------------------------------------
 | MAIN_CONTROLLER
 |-----------------------------------------------------------------
 | Defines the main controller.
 | The defined controller will be called  at the root of the
 | application.
 |
*/
define('MAIN_CONTROLLER', 'welcome');

/*
 |-----------------------------------------------------------------
 | PATH_SIZE
 |-----------------------------------------------------------------
 | Defines the location fo the file.
 | If the application is at the root of the server the value
 | will be "1", if it is inside a folder it will be "2",
 | and so on.
 |
*/
define('PATH_SIZE', 2);

/*
 |-----------------------------------------------------------------
 | HOST
 |-----------------------------------------------------------------
 | Defines the application host.
 |
 |
*/
define('HOST', 'http://localhost/nb-framework-php');