<?php

namespace WaFramework\Core\HttpLayer;

use WaFramework\Core\AppManager;

/**
 * GET http://www.web-atrio.com HTTP/1.0 
 * Accept : text/html
 * ast-modified : Saturday, 15-January-2018 14:37:11 GMT 
 * User-Agent : Mozilla/5.0 (Windows NT 10.0; Win64; x64)
 */
class Request extends AppManager
{
    public function retrievePost(){
        return $_POST;
    }

    public function getMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getUrl(){
        return str_replace("/WaFramework", "", $_SERVER['REQUEST_URI']);
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