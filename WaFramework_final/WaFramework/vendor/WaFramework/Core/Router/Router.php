<?php

namespace WaFramework\Core\Router;


class Router
{
    private $routes = [];

    public function  add(Route $route){
        if(!in_array($route, $this->routes)){
            $this->routes[] = $route;
        }
    }

    public function get($url){
        foreach ($this->routes as $route){

            // Si la route correspond à l'url
            if($route->checkUrl($url) !== false){

                $paramsValues = $route->checkUrl($url);

                // Si la route trouvée a des parametres
                if($route->hasParams()){
                    $paramNames  = $route->getParamNames();
                    $listParams = [];

                    // On crée un tableau clé/valeur
                    foreach ($paramsValues as $key => $value ){
                        if($key !== 0){
                            $listParams[$paramNames[$key-1]] = $value;
                        }
                    }

                    // On assigne le tableau de params à la route
                    $route->setParams($listParams);
                }

                return $route;
            }
        }

        throw new \RuntimeException('Route non trouvée');
    }
}