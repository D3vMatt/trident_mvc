<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{
    // TODO: get this home controller route working
    // Render home.php

    public function home() {
        return $this->render('home');
    }

}