Le projet a été réalisé à l'aide du framework php Laravel, qui utilise un ORM pour la 
création et la migration des modèles de la base de données : Eloquent. Lors de la migration
des tables, une table supplémentaire est créée : "migrations" elle répertorie les dates
à laquelle les migrations ont été effectuées et rien de plus.

Afin de pouvoir tester le projet il faut que vous installiez Laravel en plusieurs étapes :
	1 - Vérifiez votre version de PHP (j'utilise la version 7.4.5)
		- php -v dans l'invite de commande
	1.1 - Activez les extensions PHP
		- Ouvrez php.exe
		- Cherchez les extensions "extension=fileinfo" et "extension=pdo_mysql"
		- Décommentez ces extensions (enlevez les ";" avant ces extensions)
	2 - Pour la base de données, j'utilise EasyPHP DevServer 14.1 VC11 (phpmyadmin)
	3 - Installer "Composer" :
		- Si vous êtes sur windows installer composer en suivant ce lien :
			https://getcomposer.org/download/
		- Si vous êtes sous Linux, suivez les commandes scripts sur le lien.
		- Lors de l'installation de composer, choisissez bien la bonne version
		  de php à utiliser avec composer (7.4.5)
	4 - J'utilise Visual Studio Code (VSC) comme éditeur de texte, il est équipé de terminal
	    de commande ce qui facilite la création de projet laravel.
	5 - Une fois composer installé, ouvrez votre terminal de commande (ou faites CTRL+ù
	    sur VSC pour l'ouvrir) et entrez les commandes suivantes :
		- Placez-vous dans le dossier dans lequel vous souhaitez mettre mon projet
		- entrez la commande : "composer global require laravel/installer"
		- Attendez la fin de l'installation de laravel
	6 -  Placez une copie de mon projet dans le dossier en question.
	7 - Une fois le projet ajouté, lancez le serveur (toujours dans 
	    l'invite de commande, en entrant cette fois dans le dossier 
	    créée par le projet) à l'aide de la commande :
		- cd Projet SI
		- php artisan serve
		- Attention : Il se peut que votre antivirus supprime un fichier créer par composer : "serve.php".
		  Si ce fichier est supprimé vous ne pourrez pas lancer le projet, je mettrais une copie
		  de ce fichier avec mon projet, vous devrez désactiver votre système anti-virus et ajouter
		  ce fichier à la racine du projet (directement dans le dossier Projet-SI).
		- le projet a été créée et vous pouvez accéder au site localhost avec
		  l'url : 127.0.0.1:8000/
Vous pouvez maintenant tester mon projet.

Pour l'importation de la base de données vous pouvez utiliser deux méthodes :

	- Importer mon .sql et nommer la base "projetsi"
	- Utiliser la commande "php artisan migrate" dans le répertoire du projet