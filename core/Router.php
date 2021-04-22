<?php

namespace app\core;

/**
 * Class Router
 * @package app\core
 */
class Router
{

    protected array $routes = [];
    protected Request $request;

    /**
     * Router constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * @param string $path
     * @param $callback
     */
    public function get(string $path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    // Get route callback using path and method
    public function resolve()
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? false;

        if (is_string($callback))
            return include_once __DIR__ ."/../views/$callback.php";

        if ($callback)
            return call_user_func($callback);



        return 'Route not found';

    }
}