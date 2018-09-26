
# TD POO

---

## Modèle simple
Voici le modèle de départ de notre site de e-commerce :  

<div style="display:flex; flex-direction: row; justify-content:space-around;font-size:18px; width: 800px">
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Produit
        </div>
        <div>
            nom<br />
            prix<br />
            -------------------<br />
            getInfos()<br />
            get()/set()<br />
        </div>
    </div>
	<br />
	<br />
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Vendeur
        </div>
        <div>
            civilite<br />
            prenom<br />
            nom<br />
            -------------------<br />
            getInfos()<br />
            get()/set()<br />
        </div>
    </div>
	<br />
	<br />
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Client
        </div>
        <div>
            civilite<br />
            prenom<br />
            nom<br />
            -------------------<br />
            getInfos()<br />
            get()/set()<br />
        </div>
    </div>
</div>
<br />

1. A partir de ce modèle : créer les classes associées  
2. Créer un fichier index dans lequel vous testerez ces classes :  
    - Création d’un élément  
    - Affichage de l’élément  
    - Modification de l’élément  
    - Affichage de l’élément modifié  
    
## Modèle avec vendeur

<div style="display:flex; flex-direction: row; justify-content:space-around;font-size:18px; width: 800px">
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Produit
        </div>
        <div>
            nom<br />
            prix<br />
            vendeur<br />
            -------------------<br />
            getInfos()<br />
            get()/set()<br />
        </div>
    </div>
	<br />
	<br />
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Vendeur
        </div>
        <div>
            civilite<br />
            prenom<br />
            nom<br />
            -------------------<br />
            getInfos()<br />
            get()/set()<br />
        </div>
    </div>
	<br />
	<br />
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Client
        </div>
        <div>
            civilite<br />
            prenom<br />
            nom<br />
            -------------------<br />
            getInfos()<br />
            get()/set()<br />
        </div>
    </div>
</div>
<br />

Un produit possède un vendeur (et un seul).  

1. Dans la classe Produit, ajouter la variable « vendeur » est les méthodes get/set associées.  
2. Modifier l’affichage d’un produit pour prendre en compte le vendeur  
3. Tester votre code  


## Modèle avec client
Un client possède un panier contenant 0 ou plusieurs articles dans la limite de 4 articles maximum.  

<div style="display:flex; flex-direction: row; justify-content:space-around;font-size:18px; width: 800px">
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Produit
        </div>
        <div>
            nom<br />
            prix<br />
            vendeur<br />
            -------------------<br />
            getInfos()<br />
            get()/set()<br />
        </div>
    </div>
	<br />
	<br />
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Vendeur
        </div>
        <div>
            civilite<br />
            prenom<br />
            nom<br />
            -------------------<br />
            getInfos()<br />
            get()/set()<br />
        </div>
    </div>
	<br />
	<br />
    <div style="border:1px solid black; background:royalblue; color:white;padding:10px;">
        <div style="border-bottom:1px solid black;text-align:center; padding-bottom: 10px;">
            Client
        </div>
        <div>
            civilite<br />
            prenom<br />
            nom<br />
            panier<br />
            -------------------<br />
            getInfos()<br />
            ajouterAuPanier()<br />
            getPanier()<br />
            get()/set()<br />
        </div>
    </div>
</div>
<br />

1. Implémenter les méthodes « ajouterAuPanier » et « getPanier »  
2. Mettre en place la restriction de 4 articles maximum  
3. Tester votre code  

## « Refactoring »
1. Créer la classe « Individu » permettant de factoriser les classes « Vendeur » et « Client »  
2. Tester à nouveau votre code