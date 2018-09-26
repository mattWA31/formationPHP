<?php

    require 'Modele.php';
    
    $client  = getClient("M.", "Matthieu", "DOLEZ", ["chaise" => 1, "table" => 2]);
    $client2 = getClient("Mme.", "Sophie", "De Toulouse", ["chaise" => 1]);
    
    $panier = $client->getPanier();
    
    // Affichage
    require 'vueCommerce.php';


