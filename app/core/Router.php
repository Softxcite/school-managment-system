<?php

namespace App\Core;

class Router
{
    private $controller = 'HomeController';
    private $method = 'index';
    private $params = [];

    public function route($encryptedUrl)
    {
        $decrypted = Encryptor::decrypt($encryptedUrl);

        if (!$decrypted) {
            die("Invalid or corrupted URL!");
        }

        $parts = explode('/', $decrypted);
        $controllerName = 'App\\Controllers\\' . ucfirst(array_shift($parts)) . 'Controller';
        $methodName = array_shift($parts) ?? 'index';

        $this->controller = $controllerName;
        $this->method = $methodName;
        $this->params = $parts;

        $this->dispatch();
    }

    private function dispatch()
    {
        if (class_exists($this->controller)) {
            $controller = new $this->controller;

            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], $this->params);
            } else {
                die("Method {$this->method} not found in {$this->controller}");
            }
        } else {
            die("Controller {$this->controller} not found");
        }
    }
}
