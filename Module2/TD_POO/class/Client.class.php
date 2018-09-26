<?php
// Fichier /class/Client.class.php
class Client extends Individu{
    private $panier = array();
    
    public function getInfos() {
        //equivaut à __toString
        return $this->civilite." ".$this->prenom." ".strtoupper($this->nom);
    }
    
    public function ajouterAuPanier(Produit $produit) {
        if(count($this->panier)<4) {
            $this->panier[] = $produit;
        } else {
            echo "Maximum atteind";
        }
    }
    
    public function getPanier() {
        return $this->panier;
    } 
}
?>
