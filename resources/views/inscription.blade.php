@extends('layout.layout')

@section('content')
		<div class="mainzone">
		<form method="POST" action="/addUser">
            @csrf
			<h3> Inscription </h3>
		  <div class="form-group">
		    <label>Adresse email</label>
		    <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" name="email" value="{{ old('email') }}" required>
		    <small id="emailHelp" class="form-text text-muted alert alert-danger">Attention : Vous ne pourrez plus modifier votre email une fois choisie, vérifiez bien avant de valider. </small>
		  </div>
		  <div class="form-group">
		    <label>Nom</label>
		    <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value="{{ old('nom') }}"required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Prénom</label>
		    <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" value="{{ old('prenom') }}" required>
		  </div>
		  <div class="form-group">
		    <label>Mot de passe</label>
		    <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="password" required>
		  </div>
		  <div class="form-group">
		    <label>Numéro de carte d'identité</label>
		    <input type="text" class="form-control" id="nocarteid" placeholder="Numéro de carte étudiant" name="nocarteid" value = "{{ old('nocarteid') }}" required>
		  </div>
		  <div class="form-group">
		    <label>Date de naissance</label>
		    <input type="date" class="form-control" id="datenaisse" name="datenaiss" value="{{ old('datenaiss') }}" required>
		  </div>
		  <div class="form-group">
		    <label>Adresse postale</label>
		    <input type="text" class="form-control" id="adrpostale" placeholder="Adresse postale" name="adrpostale" value="{{ old('adrpostale') }}" required>
		  </div>
		  <div class="form-group">
		    <label>Numéro de téléphone</label>
		    <input type="tel" class="form-control" id="notel" placeholder="Numéro de téléphone" name="notel" value="{{ old('notel') }}" required>
		  </div>
		  <input type="number" name="type_id" value="2" hidden>
		  	@if (Session::has('messageSuccess'))
   			    <div class="alert alert-info">{{ Session::get('messageSuccess') }}</div>
			@elseif (Session::has('messageError'))
   			    <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
			@endif
		  <button type="submit" class="btn btn-success" style="width:100%">Valider</button>
		  
		</form>
        </div>
@endsection