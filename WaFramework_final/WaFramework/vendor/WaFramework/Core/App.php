<?php

namespace WaFramework\Core;

use WaFramework\Core\HttpLayer\Request;
use WaFramework\Core\HttpLayer\Response;
use WaFramework\Core\Router\Route;
use WaFramework\Core\Router\Router;

abstract class App
{
    /** @var Request $request */
    private $request;
    private $response;
    private $name;

    public function __construct($name){
        $this->name = $name;
        // Initialisation requete & reponse
        $this->request = new Request($this);
        $this->response = new Response($this);
    }

    abstract public function run();

    public function getController(){
        $router = new Router();

        $toml = \Yosymfony\Toml\Toml::parseFile(__DIR__ . '/../../../App/'.$this->getName().'/Config/routes.toml' );
        $routes = $toml['routes'];

        // Parcourir les routes
        foreach ($routes as $route) {
            $params = [];

            // On regarde si des params sont présent pour la route selectionné
            if (isset($route["params"]) && count($route["params"]) > 0) {
                $params = $route["params"];
            }

            // On ajoute la route au router
            $router->add(new Route($route['action'], $route['module'], $route['url'], $params));
        }

        try {
            $correctRoute = $router->get($this->request->getUrl());
        }
        catch(\RuntimeException $e){
            $this->response->errorRedirect();
        }

        $_GET = array_merge($_GET, $correctRoute->getParams());


        // Instanciation du controller
        $controllerClass = 'App\\' . $this->getName() . '\\Controllers\\' . $correctRoute->getModule() . 'Controller';

        return new $controllerClass($this, $correctRoute->getAction(), $correctRoute->getModule());


    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * getResponse
     *
     * cette methode retourne la réponse
     *
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }




}