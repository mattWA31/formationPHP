1. Creation du dossier vendor/WaFramework/Core  
2. Création du dossier vendor/WaFramework/Core/HttpLayer  
3. Création du fichier vendor/WaFramework/Core/HttpLayer/Request.php (sans le extends)  
4. Création du fichier vendor/WaFramework/Core/HttpLayer/Response.php (sans le extends)  
4a.Création du fichier index.php dans /web (pour tester l'autoload et la classe Request)  
5. Création du fichier vendor/WaFramework/Core/App.php (sans $this dans request et response)  
6. Création du fichier vendor/WaFramework/Core/AppManager.php  
7. Ajout du extends de AppManager dans les fichiers Request et Response  
8. Ajout de $this dans le constructeur de App pour l'instanciation de Request et Response  