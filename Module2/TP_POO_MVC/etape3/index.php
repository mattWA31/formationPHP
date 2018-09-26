<?php

    // Gestion des données
    require_once 'class/Individu.class.php';
    require_once 'class/Client.class.php';
    require_once 'class/Produit.class.php';
    require_once 'class/Vendeur.class.php';
    
    $vendeur = new Vendeur("M.", "Jean", "DUPOND");
    $chaise  = new Produit("chaise", 20, $vendeur); 
    $table   = new Produit("table", 40, $vendeur);
    
    $client  = new Client("M.", "Matthieu", "DOLEZ");
    $client->ajouterAuPanier($chaise);
    $client->ajouterAuPanier($table);
    $client->ajouterAuPanier($table);
    $client->ajouterAuPanier($chaise);
    
    $client2 = new Client("Mme.", "Sophie", "De Toulouse");
    $client2->ajouterAuPanier($chaise);
    
    $panier = $client->getPanier();
    
    // Affichage
    require 'vueCommerce.php';


