<?php
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
    $client->ajouterAuPanier($chaise);
    $client->ajouterAuPanier($table);
    $client->ajouterAuPanier($table);
    
    $panier = $client->getPanier();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TD POO</title>
    </head>
    <body>
        <?php
            echo "<p>".$client."</p>";
            /* @var $produit Produit */
            foreach($panier as $produit) {
                echo "<p>".$produit."</p>";
            }
        ?>
    </body>
</html>
