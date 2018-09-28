<?php

namespace WaFramework\Core\HttpLayer;


use WaFramework\Core\AppManager;

class Request extends AppManager
{
    public function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getUrl(){
        return $_SERVER['REQUEST_URI'];
    }

    public function getGet($name){
        $result = null;
        if(isset($_GET[$name])){
            $result = $_GET[$name];
        }

        return $result;
    }

    public function getPost($name){
        $result = null;
        if(isset($_POST[$name])){
            $result = $_POST[$name];
        }

        return $result;
    }

    public function checkGet($name){
        return isset($_GET[$name]);
    }


    public function checkPost($name){
        return isset($_POST[$name]);
    }
}