<?php


namespace app\core;


class Request
{

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        return explode('?', $path, 2)[0];
    }

    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isGet()
    {
        return $this->method() === 'get';
    }

    public function isPost()
    {
        return $this->method() === 'post';
    }

    public function getBody()
    {
        $data = [];
        foreach ($_REQUEST as $key => $value) {
            $data[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        return $data;
    }

}