<?php

require_once __DIR__ . '../../vendor/autoload.php';

use app\core\Application;


$app = new Application();

$app->router->get('/', function (){
    echo 'Hello World';
});

$app->router->get('/test', function (){
    echo 'This is a test route';
});


$app->run();

