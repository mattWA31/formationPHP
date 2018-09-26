# TD2 Tableaux, structures de contrôles et structures conditionnelles.

Faire un fichier par exercice.

## Exo 1 Création et affichage
Créer un tableau contenant les éléments suivants : 1, -3, 12, 0, -5, 7.  
Afficher ce tableau dans une page web en utilisant print_r().  
Triez les éléments et afficher à nouveau le tableau.  

## Exo 2 Structure de boucle
Utilisez la structure for pour afficher les éléments du tableau de l’exercice 1.  
Dans le même fichier, réaliser la même chose avec les boucles while et foreach.  

## Exo 3 Structure conditionnelle
En utilisant le tableau de l’exercice 1, réaliser un affichage dans la page web permettant de préciser si le nombre est positif, négatif ou égal à 12. On utilisera la clef pour réaliser l’affichage.  
Exemple d’affichage :  

<div style="border:1px solid black;padding:10px; width:400px">
L’élément d’indice 0 (1) est positif<br>
L’élément d’indice 1 (-3) est négatif<br>
L’élément d’indice 2 (12) est égal à 12<br>
[…]<br>
</div>

## Exo 4 Tableau associatif
Créer un tableau associatif contenant le nom d’un pays dans la clé et la capitale correspondante dans la valeur. Afficher la capitale de la France (directement, sans utiliser de boucle), puis afficher toutes les capitales que vous aurez indiquées.  
Exemple d’affichage (en gras les parties variables) : 
<div style="border:1px solid black;padding:10px; width:400px"> 
La capitale du pays France est : <b>Paris</b>
</div>
<div style="border:1px solid black;padding:10px; width:400px">
La capitale du pays <b>France</b> est : <b>Paris</b><br> La capitale du pays <b>Italie</b> est : <b>Rome</b><br> La capitale du pays <b>Belgique</b> est : <b>Bruxelles</b><br>
[…]
</div>

## Exo 5 Tableau multidimensionnel
Le but est de réaliser un tableau permettant le publipostage.  
Utiliser un tableau « mixte » dont les clés seront, selon le besoin des entiers ou des chaines pour réaliser l’affichage ci-après.  
Les champs utilisés seront : civilité, nom, ville, adresse.  
<div style="border:1px solid black;padding:10px; width:500px"> 
Bonjour <b>M. Dupont</b>, vous habitez à <b>Toulouse - 7, avenue Foch</b>.<br>
Bonjour <b>Mme Duran</b>, vous habitez à <b>Rouen - 12, rue de l’église</b>.<br>
Bonjour <b>Mlle Dulieu</b>, vous habitez à <b>Paris - Place du parlement</b>.<br>
Bonjour <b>Mme Dejean</b>, vous habitez à <b>Lille - 5, chemin du haut</b>.<br>
</div>  

## Exo 6 Switch/case
Dans le fichier précédent, on veut afficher l’abonnement des personnes selon leur civilité :  
  * M. abonné à Turbo
  * Mme abonné à Figaro
  * Mlle abonné à Express  
  
Affichage demandé :  
<div style="border:1px solid black;padding:10px; width:700px"> 
Bonjour <b>M. Dupont</b>, vous habitez à <b>Toulouse - 7, avenue Foch</b> vous êtes abonné à <b>Turbo</b><br>
Bonjour <b>Mme Duran</b>, vous habitez à <b>Rouen - 12, rue de l’église</b> vous êtes abonné à <b>Figaro</b><br>
Bonjour <b>Mlle Dulieu</b>, vous habitez à <b>Paris - Place du parlement</b> vous êtes abonné à <b>Express</b><br>
Bonjour <b>Mme Dejean</b>, vous habitez à <b>Lille - 5, chemin du haut</b> vous êtes abonné à <b>Figaro</b><br>
</div>  