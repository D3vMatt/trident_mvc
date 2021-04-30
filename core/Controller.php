<?php


namespace app\core;
use app\core\Router;



class Controller
{

    public string $layout = 'main';

    public function render($view, $data = null){
        return Application::$app->router->renderView($view, $data);
    }

    public function setLayout($layout) {
        $this->layout = $layout;
    }

}