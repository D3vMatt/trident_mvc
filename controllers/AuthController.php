<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{


    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->setLayout('auth');
    }

    public function login(Request $request)
    {
        if ($request->isPost()) {
            echo 'handling Post request';
            exit();
        }
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            echo 'handling Post request';
            exit();
        }
        return $this->render('register');

    }

}