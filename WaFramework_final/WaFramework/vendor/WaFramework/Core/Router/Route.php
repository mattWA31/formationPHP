<?php

namespace WaFramework\Core\Router;


class Route
{
    private $action;
    private $module;
    private $url;
    private $paramNames;
    private $params = [];

    /**
     * Route constructor.
     * @param $action
     * @param $module
     * @param $url
     * @param $paramNames
     */
    public function __construct($action, $module, $url, array $paramNames)
    {
        $this->action = $action;
        $this->module = $module;
        $this->url = $url;
        $this->paramNames = $paramNames;
    }

    public function hasParams()
    {
        return !empty($this->paramNames);
    }

    public function checkUrl($url){
        if(preg_match('`^'.$this->url.'`', $url, $matches)){
            return $matches;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param mixed $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return array
     */
    public function getParamNames()
    {
        return $this->paramNames;
    }

    /**
     * @param array $paramNames
     */
    public function setParamNames(array $paramNames)
    {
        $this->paramNames = $paramNames;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param array $params
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }




}