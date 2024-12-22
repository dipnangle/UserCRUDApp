<?php

require_once $globals['controllers'].'/UserController.php';

$UserController = new UserController();

$routes = [
    ['method' => 'GET', 'pattern' => '/^users$/', 'handler' => [$UserController, 'getUsers']],
    ['method' => 'GET', 'pattern' => '/^users\/(\d+)$/', 'handler' => [$UserController, 'getUser']],
    ['method' => 'POST', 'pattern' => '/^users$/', 'handler' => [$UserController, 'addUser']],
    ['method' => 'POST', 'pattern' => '/^users\/(\d+)$/', 'handler' => [$UserController, 'updateUser']],
    ['method' => 'DELETE', 'pattern' => '/^users\/(\d+)$/', 'handler' => [$UserController, 'deleteUser']],
];
