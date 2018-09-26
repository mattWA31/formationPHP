<?php
class Individu { 
    protected $civilite;
    protected $prenom;
    protected $nom;
    
    function __construct($civilite, $prenom, $nom) {
        $this->civilite = $civilite;
        $this->prenom   = $prenom;
        $this->nom      = $nom;
    }
    
        public function __toString() {
        //equivaut à getInfos
        return $this->civilite." ".$this->prenom." ".strtoupper($this->nom);
    }
    
    public function getCivilite() {
        return $this->civilite;
    }

    public function setCivilite($civilite) {
        $this->civilite = $civilite;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }
}

?>
