# TD CRUD

Liste
Ajout
Suppression
Modification

---

## Légende 
- S: système (serveur php/mysql)  
- U: utilisateur (client)  

## Liste
- S liste les données  

<div style="display:block; width:150px; height: 200px;background:royalblue; color: white; border:1px solid black;text-align:center; vertical-align:middle">
	Liste des données
</div>

## Ajout
- U saisi des données
- U clic sur ajouter
- S valide les données
- S récupère les données
- S enregistre les données dans la BDD

fichier form.php ----> nom, prenom ----> fichier ajouter.php

## Suppression
- U clic sur lien supprimer
- demander une confirmation
- U envoi l'id à supprimer
- S récupère l'id à supprimer
- S supprimer l'enregistrement grâce à l'id

lien ------> id ------> supprimer.php

## Modification
- U clic sur modifier
- U envoi l'id à modifier
- S récupère l'id à modifier
- S affiche les anciennes valeurs
- U modifie les valeurs
- U envoi les nouvelles valeurs (clic sur modifier)
- S valide les nouvelles valeurs
- S reçoit les nouvelles valeurs
- S modifie l'entrée id

lien ------> id -----> modifier.php (formulaire avec ancienne valeurs) ---> id, nom, prenom ---> save.php 

## Sujet
- Créer les pages des gestion de la table étudiants  
  – Liste  
  – Création  
  – Suppression  
  – Modification  
  
Vous pouvez vous aider du fichier modèle