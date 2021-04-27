<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $data = [
            'description' => 'Welcome to the home page!'
        ];
        return $this->render('home', $data);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContactSubmit()
    {
        echo "Submitting contact form";
    }
}