1. Creation du dossier vendor/WaFramework/Core  
2. Cr�ation du dossier vendor/WaFramework/Core/HttpLayer  
3. Cr�ation du fichier vendor/WaFramework/Core/HttpLayer/Request.php (sans le extends)  
4. Cr�ation du fichier vendor/WaFramework/Core/HttpLayer/Response.php (sans le extends)  
4a.Cr�ation du fichier index.php dans /web (pour tester l'autoload et la classe Request)  
5. Cr�ation du fichier vendor/WaFramework/Core/App.php (sans $this dans request et response)  
6. Cr�ation du fichier vendor/WaFramework/Core/AppManager.php  
7. Ajout du extends de AppManager dans les fichiers Request et Response  
8. Ajout de $this dans le constructeur de App pour l'instanciation de Request et Response  