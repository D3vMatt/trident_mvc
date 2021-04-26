<?php


namespace app\core;
use app\core\Router;



class Controller
{

    public function render($view){
        Application::$app->router->renderView($view);
    }

}