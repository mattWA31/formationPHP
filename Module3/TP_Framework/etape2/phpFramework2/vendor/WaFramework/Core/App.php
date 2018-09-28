<?php

namespace WaFramework\Core;


use WaFramework\Core\HttpLayer\Request;
use WaFramework\Core\HttpLayer\Response;

abstract class App
{
    protected $request;
    protected $response;
    protected $name;

    public function __construct()
    {
        $this->request  = new Request($this);
        $this->response = new Response($this);
        $this->name     = "";
    }

    abstract public function run();

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


}