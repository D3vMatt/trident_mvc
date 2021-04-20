<?php

namespace app\core;


/**
 * Class Application
 * @package app\core
 */
class Application
{

    public Router $router;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->router =  new Router();
    }

    public function run()
    {
        $this->router->resolve();
    }


}