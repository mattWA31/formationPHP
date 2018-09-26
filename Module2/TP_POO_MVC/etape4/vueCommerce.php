<!-- Affichage -->
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