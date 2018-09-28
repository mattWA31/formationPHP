<?php

namespace WaFramework\Controller;


use WaFramework\Core\App;
use WaFramework\Core\AppManager;
use WaFramework\Core\View;

abstract class BaseController extends AppManager
{
    protected $action   = '';
    protected $module   = '';
    protected $view     = null;
    protected $viewName = '';

    public function __construct(App $app, $module, $action)
    {
        parent::__construct($app);

        $this->view = new View($app);

        $this->setModule($module);
        $this->setAction($action);
        $this->setViewName($action);
    }

    public function execute(){
        $method = $this->action . 'Action';

        if(!is_callable([$this, $method])){
            throw new \RuntimeException("L'action '" . $this->action . "' n'est pas définie sur ce module.");
        }

        $this->$method($this->app->getRequest());
    }

    public function getAction(){
        return $this->action;
    }

    public function getModule(){
        return $this->module;
    }

    public function getView(){
        return $this->view;
    }


    public function getViewName(){
        return $this->viewName;
    }

    public function setModule($module){
        $this->module = $module;
    }


    public function setAction($action){
        $this->action = $action;
    }


    public function setViewName($viewName){
        $this->viewName = $viewName;

        $this->view->setContentFile(__DIR__ . '/../../../App/' . $this->getApp()->getName() . '/Views/' . $this->getViewName() . '.php');

    }


}