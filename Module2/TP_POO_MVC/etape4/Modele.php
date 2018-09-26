<?php

    // Gestion des données
    require_once 'class/Individu.class.php';
    require_once 'class/Client.class.php';
    require_once 'class/Produit.class.php';
    require_once 'class/Vendeur.class.php';
    
    function getVendeur(){
        return new Vendeur("M.", "Jean", "DUPOND");
    }
    
    function getChaise($vendeur){
        return new Produit("chaise", 20, $vendeur); 
    }
    
    function getTable($vendeur){
        return new Produit("table", 40, $vendeur); 
    }
    
    function getClient($titre, $prenom, $nom, $panier){
        $client = new Client($titre, $prenom, $nom);
        foreach($panier as $cle => $nombre){
            switch ($cle){
                case "chaise" :
                    for($i = 0; $i < $nombre; $i++){
                        $client->ajouterAuPanier(getChaise(getVendeur()));
                    }
                    break;
                case "table":
                    for($i = 0; $i < $nombre; $i++){
                        $client->ajouterAuPanier(getTable(getVendeur()));
                    }
                    break;
            }
        }
        return $client;
    }