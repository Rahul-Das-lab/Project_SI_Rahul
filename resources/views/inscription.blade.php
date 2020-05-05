<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
	<body>
        
		<div class="mainzone">
		<form method="POST" action="/addUser">
            @csrf
			<h3> Inscription </h3>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Adresse email</label>
		    <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" name="email" required>
		    <small id="emailHelp" class="form-text text-muted">Cette adresse mail sera votre identifiant de connexion.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Nom</label>
		    <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Prénom</label>
		    <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Mot de passe</label>
		    <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Numéro de carte d'étudiant</label>
		    <input type="text" class="form-control" id="nocarteid" placeholder="Numéro de carte d'étudiant" name="nocarteid" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Date de naissance</label>
		    <input type="date" class="form-control" id="datenaisse" placeholder="Numéro de carte d'étudiant" name="datenaiss" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Adresse postale</label>
		    <input type="text" class="form-control" id="adrpostale" placeholder="Adresse postale" name="adrpostale" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Numéro de téléphone</label>
		    <input type="number" class="form-control" id="notel" placeholder="Numéro de téléphone" name="notel" required>
		  </div>

		  <button type="submit" class="btn btn-success" style="width:100%">Valider</button>
		  
		</form>
        </div>
	</body>
</html>