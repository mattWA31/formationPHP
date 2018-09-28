<?php

define("DEFAULT_APP", "Test");

if(!isset($_GET['app'])) $_GET['app'] = DEFAULT_APP;


define("DS", DIRECTORY_SEPARATOR);

require_once('..'. DS . 'vendor' . DS . 'autoload.php');

$appClass = 'App\\' . $_GET['app'] . '\\' . $_GET['app'] . 'Application';
$app = new $appClass($_GET['app']);
$app->run();