<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>

<h1 style="text-align: center;"> Projet Miage </h1>

<div class="mainzone">


    <form method="POST" action="/modifProfil">
    @csrf
                <h3> Modification profil </h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" name="email" value="{{ session('user')->email }}" required >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom" name="name" value="{{ session('user')->name }}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Prénom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="firstname" value="{{ session('user')->firstname }}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" placeholder="Choisissez un nouveau mot de passe" name="password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Numéro de carte d'étudiant</label>
                <input type="text" class="form-control" id="nocarteid" placeholder="Numéro de carte d'étudiant" name="card_id" value="{{ session('user')->card_id }}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Date de naissance</label>
                <input type="date" class="form-control" id="datenaisse" placeholder="Numéro de carte d'étudiant" name="birth_date" value="{{ session('user')->birth_date }}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Adresse postale</label>
                <input type="text" class="form-control" id="adrpostale" placeholder="Adresse postale" name="address" value="{{ session('user')->address }}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Numéro de téléphone</label>
                <input type="text" class="form-control" id="notel" placeholder="Numéro de téléphone" name="notel" value="{{ session('user')->notel }}" required>
            </div>
            <button type="submit" class="btn btn-success" style="width:100%">Valider</button>
                
    </form>

</div>

</body>
</html>