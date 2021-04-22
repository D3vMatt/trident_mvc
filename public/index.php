<?php

require_once __DIR__ . '../../vendor/autoload.php';

use app\core\Application;


$app = new Application(dirname($_SERVER['DOCUMENT_ROOT']));

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');


$app->run();

