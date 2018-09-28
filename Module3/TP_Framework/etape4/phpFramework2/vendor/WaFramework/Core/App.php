<?php

namespace WaFramework\Core;


use WaFramework\Core\HttpLayer\Request;
use WaFramework\Core\HttpLayer\Response;
use WaFramework\Router\Route;
use WaFramework\Router\Router;
use Yosymfony\Toml\Toml;

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

    public function getController(){
        $router = new Router();

        $toml = Toml::ParseFile(__DIR__ . '/../../../App/' . $this->getName() . '/Config/routes.toml');
        $routes = $toml['routes'];


        // On parcourt les routes :
        foreach ($routes as $route){
            $params = [];

            // On regarde si des params sont présents dans l'URL
            if(isset($route['params']) && count($route['params']) > 0){
                $params = $route['params'];
            }

            // On ajoute la route au routeur:
            $router->add(new Route($route['url'], $route['module'], $route['action'], $params));
        }

        var_dump($this->request->getUri());

        try {
            $correctRoute = $router->get($this->request->getUri());
        } catch (\RuntimeException $e){
            if($e->getCode() == Router::NO_ROUTE){
                $this->response->errorRedirect();
            }
        }

        var_dump($correctRoute); die;

        $_GET = array_merge($_GET, $correctRoute->getParams());

        // Instanciation du controller
        $controllerClass = 'App\\' . $this->getName() . '\\Modules\\' . $correctRoute->getModule(). '\\' . $correctRoute->getModule() . 'Controller';
        return new $controllerClass($this, $correctRoute->getModule(), $correctRoute->getAction());
    }

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