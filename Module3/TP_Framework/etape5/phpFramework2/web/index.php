<?php

use App\Test\TestApplication;
use WaFramework\Core\HttpLayer\Request;
use Yosymfony\Toml\Toml;

define('DS', DIRECTORY_SEPARATOR);

require __DIR__ . DS . '..' . DS . 'vendor/autoload.php';


$testApp = new TestApplication();
$request = new Request($testApp);
echo "Uri = " . $request->getUri() . '<br>';
echo "Methode = " . $request->getMethod() . '<br>';
echo "Application = " . $request->getApp()->getName();

$testApp->getController();