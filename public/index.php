<?php

require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'User', 'action' => 'index']);        
$router->add('add/', ['controller' => 'User', 'action' => 'addUser']);
$router->add('update', ['controller' => 'User', 'action' => 'Update']);
$router->add('delete', ['controller' => 'User', 'action' => 'Delete']);
    
$router->dispatch($_SERVER['QUERY_STRING']);