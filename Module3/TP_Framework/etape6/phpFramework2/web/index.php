<?php

use App\Test\TestApplication;

const DEFAULT_APP = 'Test';

// Si l'application n'est pas valide, on va charger l'application par défaut qui se chargera de générer une erreur 404
if (!isset($_GET['app']) || !file_exists(__DIR__.'/../App/'.$_GET['app'])) $_GET['app'] = DEFAULT_APP;

define('DS', DIRECTORY_SEPARATOR);

require __DIR__ . DS . '..' . DS . 'vendor/autoload.php';


$appClass = 'App\\' . $_GET['app'].'\\'.$_GET['app'].'Application';
$app = new $appClass();
$app->run();



