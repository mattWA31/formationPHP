<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Mon Commerce</title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1 id="titreBlog">Mon Commerce</h1></a>
        <p>Je vous souhaite la bienvenue sur ce modeste commerce.</p>
      </header>
      <hr />
      <div id="contenu">
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
            $client->ajouterAuPanier($table);
            $client->ajouterAuPanier($chaise);
            
            $client2 = new Client("Mme.", "Sophie", "De Toulouse");
            $client2->ajouterAuPanier($chaise);
            
            $panier = $client->getPanier();
        
        ?>
        <p class="titreClient"><?= $client; ?></p>
        <div class="panier">
            <?php foreach($panier as $produit) { ?>
                    <p><?= $produit ?></p>
            <?php } ?>
            <span class="total">Total: <?= $client->totalPanier(); ?>  €</span>
        </div>
        
        
        <p class="titreClient"><?= $client2; ?></p>
        <div class="panier">
            <?php foreach($client2->getPanier() as $produit) { ?>
                    <p><?= $produit ?></p>
            <?php } ?>
            <span class="total">Total: <?= $client2->totalPanier(); ?> €</span>
        </div>
      </div>
    </div>
    </body>
</html>
