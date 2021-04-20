<?php

namespace app\core;

/**
 * Class Router
 * @package app\core
 */
class Router
{

    protected array $routes = [];

    public function get(string $path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $request = new Request();
        // determine current path
        // determine current method
        // excecute callback function & output results to user
        echo  "<pre>";
        echo $request->getPath();
        echo  "</pre>";
        exit();
    }
}