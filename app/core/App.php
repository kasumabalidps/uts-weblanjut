<?php

class App{
    protected $controller = 'Home';
    protected $method = 'index';

    public function __construct()
    {
        $url = $this->parseURL();
        
        // Controller
        if(isset($url[0])){
            if(file_exists('../app/controllers/' . ucfirst($url[0]) . '.php') ) {
                $this->controller = ucfirst($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            }
        }

        // Jalankan controller & method
        call_user_func([$this->controller, $this->method]);
    }

    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}