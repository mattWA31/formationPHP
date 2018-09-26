<?php

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
            echo '<div style="color:red; border:1px solid red; padding:10px;">Vous ne pouvez pas ajouter d\'article supplémentaire au panier</div>';
        }
    }
    
    public function getPanier() {
        return $this->panier;
    } 
    
    public function totalPanier(){
        $total = 0;
        foreach($this->panier as $produit){
            $total += $produit->getPrix();
        }
        
        return $total;
    }
}

?>
