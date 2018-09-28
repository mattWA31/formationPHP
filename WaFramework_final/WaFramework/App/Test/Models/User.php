<?php

namespace App\Test\Models;


class User
{
    private $id;
    private $nom;
    private $prenom;
    private $email;

    public function save(){
        $connexion = new \PDO('mysql:host=localhost;dbname=wa_db', 'root', '');
        $sql = 'INSERT INTO users(id, nom, prenom, email) VALUES (?,?,?,?)';
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $this->nom);
        $stmt->bindParam(3, $this->prenom);
        $stmt->bindParam(4, $this->email);

        $result = $stmt->execute();

        return $result;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}