<?php
// TD POO 01 - Fichier /class/Individu.class.php
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
    
    public function getCivilite() { return $this->civilite; }
    public function setCivilite($civilite) { $this->civilite = $civilite; }

    public function getPrenom() {return $this->prenom;}
    public function setPrenom($prenom) {$this->prenom = $prenom;}

    public function getNom() {return $this->nom;}
    public function setNom($nom) {$this->nom = $nom;}
}
?>

<?php
// TD POO 01 - Fichier /class/Client.class.php
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
    
    public function getPanier() { return $this->panier; } 
}
?>

<?php
// TD POO 01 - Fichier /class/Vendeur.class.php
class Vendeur extends Individu { }
?>

<?php
// TD POO 01 - Fichier /class/Produit.class.php
class Produit { 
    private $nom;
    private $prix;
    
    private $vendeur;
    
    function __construct($nom, $prix, Vendeur $vendeur) {
        $this->nom      = $nom;
        $this->prix     = $prix;
        $this->vendeur  = $vendeur;
    }
    
    public function getInfos() { return $this->nom." (".$this->prix." €) vendu par ".$this->vendeur; }
    public function __toString() { return $this->nom." (".$this->prix." €) vendu par ".$this->vendeur; }
    
    public function getNom() {return $this->nom;}
    public function setNom($nom) {$this->nom = $nom;}

    public function getPrix() {return $this->prix;}
    public function setPrix($prix) {$this->prix = $prix;}
    
    public function getVendeur() {return $this->vendeur;}
    public function setVendeur($vendeur) {$this->vendeur = $vendeur;}
}
?>

<!-- TD POO 01 - Fichier /index.php
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TD POO</title>
    </head>
    <body>
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
        <?php
            echo "<p>".$client."</p>";
            /* @var $produit Produit */
            foreach($panier as $produit) {
                echo "<p>".$produit."</p>";
            }
        ?>
    </body>
</html>

