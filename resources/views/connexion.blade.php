@extends('layout.layout')

@section('content')
		<div class="mainzone" style="margin-top:15%">
        
        @if(session('user')->email ?? "")
        <h5 id="emailHelp" class="form-text alert alert-info">Vous êtes déjà connecté en tant que {{session('user')->email ?? ""}}, <a href="/logout">Se déconnecter</a> </h5>
        @else
            <form method="POST" action="/connectUser">
                @csrf
                <h3> Connexion </h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" name="email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="password" required>
            </div>
            @if (Session::has('messageSuccess'))
   			    <div class="alert alert-info">{{ Session::get('messageSuccess') }}</div>
		    @elseif (Session::has('messageError'))
   			    <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
		    @endif
            <button type="submit" class="btn btn-success" style="width:100%">Valider</button>
            </form>
        @endif

        </div>
@endsection