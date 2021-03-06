<?php

namespace WaFramework\Core\HttpLayer;


use WaFramework\Core\AppManager;

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

    }

    public function render(){
        exit($this->view->getView());
    }

    public function setView(View $view){
        $this->view = $view;
    }

}