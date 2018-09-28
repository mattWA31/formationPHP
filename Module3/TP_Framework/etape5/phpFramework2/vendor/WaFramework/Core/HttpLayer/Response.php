<?php

namespace WaFramework\Core\HttpLayer;


use WaFramework\Core\AppManager;
use WaFramework\Core\View;

class Response extends AppManager
{
    protected $view;

    public function setHeader($header){
        header($header);
    }

    public function redirect($loc){
        header('Location: ' . $loc);
        exit();
    }

    public function errorRedirect(){
        $this->view = new View($this->app);
        $this->view->setContentFile(__DIR__ . '/../../Errors/404.html');
        $this->setHeader('HTTP/1.0 404 Not found');
        $this->render();
    }

    public function render(){
        exit($this->view->getView());
    }

    public function setView(View $view){
        $this->view = $view;
    }

    public function setCookie($name, $value = '', $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
        setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
    }
}