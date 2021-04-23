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
    public Response $response;
    public static Application $app;
    public static $ROOT_DIR;

    /**
     * Application constructor.
     */
    public function __construct($rootPath)
    {
        self::$app = $this;
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router =  new Router($this->request, $this->response);
    }

    public function run()
    {
       echo $this->router->resolve();
    }


}