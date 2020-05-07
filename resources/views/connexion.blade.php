<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
	<body>

		<div class="mainzone" style="margin-top:15%">
            <form method="POST" action="/connectUser">
                @csrf
                <h3> Connexion </h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="password">
            </div>
            <button type="submit" class="btn btn-success" style="width:100%">Valider</button>
            </form>
        </div>
	</body>
</html>