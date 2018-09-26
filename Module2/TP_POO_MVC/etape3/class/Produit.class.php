<?php

class Produit { 
    private $nom;
    private $prix;
    
    private $vendeur;
    
    function __construct($nom, $prix, Vendeur $vendeur) {
        $this->nom      = $nom;
        $this->prix     = $prix;
        $this->vendeur  = $vendeur;
    }
    
    public function getInfos() {
        //equivalent à __toString()
        return $this->nom." (".$this->prix." €) vendu par ".$this->vendeur;
    }
    
    public function __toString() {
        //equivalent à __toString()
        return $this->nom." (".$this->prix." €) vendu par ".$this->vendeur;
    }
    
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }
    
    public function getVendeur() {
        return $this->vendeur;
    }

    public function setVendeur($vendeur) {
        $this->vendeur = $vendeur;
    }
}

?>
