<?php

namespace App\Test;


use WaFramework\Core\App;

class TestApplication extends App
{

    public function __construct()
    {
        parent::__construct();
        $this->name = 'Test';
    }

    public function run()
    {
        $controller = $this->getController();
        $controller->execute();

        $this->response->setView($controller->getView());
        $this->response->render();
    }
}