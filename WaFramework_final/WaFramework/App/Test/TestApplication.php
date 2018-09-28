<?php

namespace App\Test;


use WaFramework\Core\App;

class TestApplication extends App
{
    public function run()
    {
        $controller = $this->getController();
        $controller->execute();

        // Envoyer la réponse au client
        $this->getResponse()->setView($controller->getView());
        $this->getResponse()->render();
    }
}