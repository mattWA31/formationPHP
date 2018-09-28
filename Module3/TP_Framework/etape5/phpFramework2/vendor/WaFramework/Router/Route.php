<?php

namespace WaFramework\Router;


class Route
{
    protected $action;
    protected $module;
    protected $url;
    protected $paramsNames;
    protected $params = [];

    public function __construct($url, $module, $action, array $paramsNames)
    {
        $this->setUrl($url);
        $this->setModule($module);
        $this->setAction($action);
        $this->setParamsNames($paramsNames);
    }

    public function hasParams(){
        return !empty($this->paramsNames);
    }

    public function check($url){
        if(preg_match('`^'. $this->url . '$`', $url, $matches)){
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
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getParamsNames()
    {
        return $this->paramsNames;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @param mixed $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $paramsNames
     */
    public function setParamsNames($paramsNames)
    {
        $this->paramsNames = $paramsNames;
    }

    /**
     * @param array $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }


}