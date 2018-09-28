<?php
/**
 * Created by PhpStorm.
 * User: Boudha
 * Date: 16/09/2018
 * Time: 03:13
 */

namespace WaFramework\Router;


class Router
{
    protected $routes = [];

    public function add(Route $route){
        if(!in_array($route, $this->routes)){
            $this->routes[] = $route;
        }
    }

    public function get($url){
        foreach ($this->routes as $route){
            // Si la route correspond à l'url
            if(($paramsValues = $route->check($url)) !== false){

                // Si la route a des parametres
                if($route->hasParams()){
                    $paramsNames = $route->getParamsNames();
                    $listParams = [];

                    // On créer un tableau clé / valeur
                    foreach ($paramsValues as $key => $value){
                        if($key !== 0){
                            $listParams[$paramsNames[$key - 1]] = $value;
                        }
                    }

                    // On assigne le tableau a la route
                    $route->setParams($listParams);
                }

                return $route;
            }
        }

        throw new \RuntimeException('Route non trouvée', 1);
    }
}