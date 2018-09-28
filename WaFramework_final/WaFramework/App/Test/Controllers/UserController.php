<?php
/**
 * Created by PhpStorm.
 * User: MDO
 * Date: 28/09/2018
 * Time: 16:05
 */

namespace App\Test\Controllers;


use App\Test\Models\User;
use WaFramework\Core\Controller\BaseController;
use WaFramework\Core\HttpLayer\Request;

class UserController extends BaseController
{
    public function listUserAction(Request $request){
        $users = [];

        $connexion = new \PDO('mysql:host=localhost;dbname=wa_db', 'root', '');
        $sql = 'SELECT * FROM users';

        $results = $connexion->query($sql);

        while($ligne = $results->fetch()){
            $user = new User();
            $user->setId($ligne['id']);
            $user->setNom($ligne['nom']);
            $user->setPrenom($ligne['prenom']);
            $user->setEmail($ligne['email']);

            $users[] = $user;
        }

        $this->getView()->addParam('users', $users);
    }

    public function createUserAction(Request $request){

        if($request->checkPost('nom')){
            $nom = $request->getPost('nom');
            $prenom = $request->getPost('prenom');
            $email = $request->getPost('email');

            if($nom && $prenom && $email){
                $user = $this->makeUser($nom, $prenom, $email);

                if($user->save()) {
                    $this->getView()->addParam('success', true);
                } else {
                    $this->getView()->addParam('errors', ['Une erreur est survenue']);
                }
            }
            else {
                $this->getView()->addParam('errors', ['Un des champs est vide']);
            }
        }

    }

    private function makeUser($nom, $prenom, $email){
        $user = new User();
        $user->setId(rand(1, 1000000));
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setEmail($email);

        return $user;
    }
}