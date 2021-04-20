<?php


namespace app\core;


class Request
{

    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = explode('?', $path, 2)[0];
        return $path;
    }

    public function getMethod(){

    }

}