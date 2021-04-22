<?php

namespace app\core;


/**
 * Class Application
 * @package app\core
 */
class Application
{

    public Router $router;
    public Request $request;
    public static $ROOT_DIR;

    /**
     * Application constructor.
     */
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->router =  new Router($this->request);
    }

    public function run()
    {
       echo $this->router->resolve();
    }


}