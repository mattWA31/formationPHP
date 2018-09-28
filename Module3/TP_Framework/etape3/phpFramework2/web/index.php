<?php

use App\Test\TestApplication;
use WaFramework\Core\HttpLayer\Request;

define('DS', DIRECTORY_SEPARATOR);

require __DIR__ . DS . '..' . DS . 'vendor/autoload.php';


$testApp = new TestApplication();
$request = new Request($testApp);
echo $request->getUrl() . '<br>';
echo $request->getMethod();