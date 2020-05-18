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

	6 -  Dézippez mon projet que vous aurez téléchargé au préalable depuis mon github dans
		ce dossier.

	6.1 - Entrez dans le dossier du projet à l'aide d'une commande "cd (nom du dossier)".

	7 - Installez les dépendances dans ce dossier à l'aide de la commande :
		- composer update

	8 - Une fois les dépendances installées, vérifiez le fichier ".env" à la racine
	    du projet :
		- les lignes 12, 13 et 14 servent à paramétrer la base de données :
			- Configurez le USERNAME et PASSWORD selon si vous les utilisez, sinon
			  laissez-les ainsi.
			- Pour la base de données, j'utilise EasyPHP DevServer 14.1 VC11 (phpmyadmin).
				- Créez une base de données du nom de "projetsi". (vous pouvez choisir un
					autre nom si vous le souhaitez, il faudra changer la ligne 12 
					Si vous avez nommé la base de données "projetsi" 
					comme moi laissez projetsi dans la ligne 12.
				- Importez ma base avec le fichier script "SQLprojetsi".

	7 - Lancez le serveur à l'aide de la commande :
		- php artisan serve

		- Attention : Il se peut que votre antivirus supprime un fichier créer par composer : "serve.php".
		  Si ce fichier est supprimé vous ne pourrez pas lancer le projet, je mettrais une copie
		  de ce fichier avec mon projet, vous devrez désactiver votre système anti-virus et ajouter
		  ce fichier à la racine du projet (directement dans le dossier Projet-SI).

		- le projet a été créée et vous pouvez accéder au site localhost avec
		  l'url : 127.0.0.1:8000/

Vous pouvez maintenant tester mon projet.
