<?php

include('personne.class.php');

class Etudiant extends Personne {
    private $coursSuivi;
    
    public function __construct($nom, $prenom){
        // le code ici
        // Appel du constructeur de Personne
        parent::__construct($nom, $prenom);
    }
    
    public function inscrire($cours){
        $this->coursSuivi = $cours;
    }
	
	public function save(){
		echo "Sauvegarde de l'etudiant dans notre base de donnée";
	}
}


?>