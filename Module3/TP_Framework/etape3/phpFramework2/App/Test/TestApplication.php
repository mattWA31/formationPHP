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
        // TODO: Implement run() method.
    }
}