# TD PDO

---

## Exercice 1
Creer la table etudiants dans la base de donnée:
1. Ouvrir Phpmyadmin
2. Cliquer sur « bases de données »
3. Saisir le nom (coursphp) de la base et l’encodage (utf8_general_ci) et cliquer sur créer.
4. selectionner la base
5. Cliquer sur « Nouvelle table »
6. Saisir les informations et cliquer sur sauvegarder  

<table border="1">
	<tr>
		<th>Nom</th>
		<th>Type</th>
		<th>Taille</th>
		<th>Defaut</th>
		<th>Interclassement</th>
		<th>Attributs</th>
		<th>Null</th>
		<th>Index</th>
		<th>A_I</th>
	<tr>
	<tr>
		<td>id</td>
		<td>INT</td>
		<td></td>
		<td>Aucune</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>x</td>
	</tr>
	<tr>
		<td>civilite</td>
		<td>VARCHAR</td>
		<td>10</td>
		<td>Aucune</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>nom</td>
		<td>VARCHAR</td>
		<td>255</td>
		<td>Aucune</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>prenom</td>
		<td>VARCHAR</td>
		<td>255</td>
		<td>Aucune</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
</table>  

NB :
- La clé est avec l’option A.I. : Auto Incrément
- Toute les valeurs sont obligatoires (case « null » non cochées)

7. Sélectionner la table créée
8. Ajouter des enregistrements en utilisant l’onglet « insérer ».
9. Tester des requêtes (ajout, suppression, modification) en utilisant l’onglet « SQL »


## Exercice 2
En utilisant la base que vous avez créé, écrire le code PHP pour
1. Ajouter un étudiant
2. Supprimer un étudiant
3. Lister tous les étudiants
4. Modifier un étudiant
5. Modifier plusieurs étudiants
6. Supprimer plusieurs étudiants
7. Afficher un message (par exemple « Exécution de la requête ») à chaque exécution de requête.