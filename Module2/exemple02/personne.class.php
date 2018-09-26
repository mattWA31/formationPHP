<?php
// Exemple02 - /personne.class.php
class Personne {
    
    private $nom;
    private $prenom;
	private $age;
    
    public function __construct($nom, $prenom, $age){
        $this->nom    = $nom;
        $this->prenom = $prenom;
		$this->age    = $age;
    }
    
    public function getNom(){
		return $this->nom;
    }
    
    public function setNom(){
        $this->nom = $nom;
    }
	
	public function getPrenom(){
		return $this->prenom;
    }
    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
	
	public function getAge(){
		return $this->age;
    }
    
    public function setAge($age){
        $this->age = $age;
    }
	
	public function valider() {
	$retour            = [];
	$retour['msg']     = [];
	$retour['success'] = true;

	//nom ne doit pas etre vide
	//nom doit etre une chaine
	if($this->nom == '' || !is_string($this->nom)) {
		$retour['success'] = false;
		$retour['msg'][] .= "Erreur sur le nom";
	}
	
	//prenom ne doit etre vide
	//prenom doit etre une chaine
	if($this->prenom == '' || !is_string($this->prenom)) {
		$retour['success'] = false;
		$retour['msg'][] .= "Erreur sur le prenom";
	}
	
	//age ne doit etre vide
	//age numérique, entier
	if($this->age == '' || !is_int($this->age)) {
		$retour['success'] = false;
		$retour['msg'][] .= "Erreur sur l'age";
	}
	
	if($retour['success']){
		return true;
	}
	
	return $retour;
}
	
	
}

?>