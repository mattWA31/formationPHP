<?php
// Exemple01 - fichier /enseignant.class.php
include('personne.class.php');

class Enseignant extends Personne {
    private $matieresEnseignees;
    
    public function enseigner($matiere){
        // Le code ici
    }
}

?>

<?php
// Exemple01 - fichier /etudiant.class.php
include('personne.class.php');
class Etudiant extends Personne {
    private $coursSuivis;
    
    public function inscrire($cours){
        // Le code ici
    }
}
?>

<?php
// Exemple01 - Fichier /personne.class.php
class Personne {
    
    private $nom;
    private $prenom;
    
}
?>