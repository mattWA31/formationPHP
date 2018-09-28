<?php
namespace App\Test\Controllers;


use App\Test\Validator\Validator;
use WaFramework\Core\Controller\BaseController;
use WaFramework\Core\HttpLayer\Request;

class HomeController extends BaseController
{
    public function indexAction(Request $request){

        $validator = new Validator();

        if(!$validator->validateContact($request)){
            $this->getView()->addParam('error', "Le formulaire n'est pas valide");
        } else {
            $this->getView()->addParam('success', "Le formulaire est valide");
        }

        $this->getView()->addParam('formdata', $_POST);
        $this->getView()->addParam('title', 'Mon super site de test');
    }

    public function contactAction(Request $request){

    }


}