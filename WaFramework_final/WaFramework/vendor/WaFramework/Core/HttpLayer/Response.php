<?php

namespace WaFramework\Core\HttpLayer;


use WaFramework\Core\AppManager;
use WaFramework\Core\View;

class Response extends AppManager
{
    private $view;

    public function getView()
    {
        return $this->view;
    }

    public function setView($view)
    {
        $this->view = $view;
    }

    public function setHeader($header){
        header($header);
    }

    public function redirect($location){
        header('Location :' . $location);
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


}