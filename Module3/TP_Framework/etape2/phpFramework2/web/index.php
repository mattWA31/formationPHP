<?php

use WaFramework\Core\HttpLayer\Request;

define('DS', DIRECTORY_SEPARATOR);

require __DIR__ . DS . '..' . DS . 'vendor/autoload.php';

$request = new Request();
echo $request->getUrl() . '<br>';
echo $request->getMethod();