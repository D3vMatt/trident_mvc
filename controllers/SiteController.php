<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;

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

    public function handleContactSubmit(Request $request)
    {
        $data = $request->getBody();
        echo "Submitting contact form";
    }
}