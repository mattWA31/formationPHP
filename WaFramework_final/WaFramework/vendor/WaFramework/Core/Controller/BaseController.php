<?php

namespace WaFramework\Core\Controller;


use WaFramework\Core\App;
use WaFramework\Core\AppManager;
use WaFramework\Core\View;

abstract class BaseController extends AppManager
{
    protected $action = '';
    protected $module = '';
    protected $view = null;
    protected $viewName = '';

    /**
     * BaseController constructor.
     * @param string $action
     * @param string $module
     */
    public function __construct(App $app, $action, $module)
    {
        parent::__construct($app);

        $this->view = new View($app);

        $this->action = $action;
        $this->module = $module;
        $this->setViewName($action);
    }

    public function execute(){
        $method = $this->action . "Action";

        if(!is_callable([$this, $method])){
            throw new \RuntimeException("L'action n'est pas définit sur ce controller");
        }

        $this->$method($this->app->getRequest());
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction(string $action)
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getModule(): string
    {
        return $this->module;
    }

    /**
     * @param string $module
     */
    public function setModule(string $module)
    {
        $this->module = $module;
    }

    /**
     * @return null
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param null $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

    /**
     * @return string
     */
    public function getViewName(): string
    {
        return $this->viewName;
    }

    /**
     * @param string $viewName
     */
    public function setViewName(string $viewName)
    {
        $this->viewName = $viewName;

        $this->view->setContentFile(__DIR__ . '/../../../../App/' .
            $this->getApp()->getName() . '/Views/' . $this->getViewName() . '.php' );
    }


}