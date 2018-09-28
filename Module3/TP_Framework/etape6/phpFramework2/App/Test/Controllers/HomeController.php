<?php

namespace App\Test\Controllers;

use WaFramework\Controller\BaseController as Controller;
use WaFramework\Core\HttpLayer\Request;


class HomeController extends Controller
{
    public function indexAction(Request $request){
        $this->getView()->addParam("titre",'Mon super titre de test');
    }
}