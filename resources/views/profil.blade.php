@extends('layout.layout')
@section('content')
    <div class="mainzone">

    @if (session('user')->email ?? "")
        <form method="POST" action="/modifProfil">
        @csrf
                @if(session('user')->type_id == 1 || session('user')->type_id == 3)
                    <h3> Modification profil </h3>
                    <div class="form-group">
                        <label>Adresse email</label>
                        <input type="email" class="form-control alert alert-danger" value="{{ session('user')->email }}" disabled>
                        <small id="emailHelp" class="form-text text-muted">Vous ne pouvez pas modifier votre adresse mail</small>
                    </div>
                    <input type="email" class="form-control alert alert-danger" id="email" placeholder="Votre adresse mail" name="email" value="{{ session('user')->email }}" hidden>
                    <div class="form-group">
                        <label>Mot de passe :</label>
                        <input type="password" class="form-control " id="mdp" placeholder="Choisissez un nouveau mot de passe" name="password" required>
                    </div>
                @else
                <h3> Modification profil </h3>
                <div class="form-group">
                    <label>Adresse email</label>
                    <input type="email" class="form-control alert alert-danger" value="{{ session('user')->email }}" disabled>
                    <small id="emailHelp" class="form-text text-muted">Vous ne pouvez pas modifier votre adresse mail</small>
                </div>
                <input type="email" class="form-control alert alert-danger" id="email" placeholder="Votre adresse mail" name="email" value="{{ session('user')->email }}" hidden>
                <div class="form-group">
                    <label >Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Nom" name="name" value="{{ session('user')->name }}" required>
                </div>
                <div class="form-group">
                    <label >Prénom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="firstname" value="{{ session('user')->firstname }}" required>
                </div>
                <div class="form-group">
                    <label >Numéro de carte d'étudiant</label>
                    <input type="text" class="form-control" id="nocarteid" placeholder="Numéro de carte d'étudiant" name="card_id" value="{{ session('user')->card_id }}" required>
                </div>
                <div class="form-group">
                    <label >Date de naissance</label>
                    <input type="date" class="form-control" id="datenaisse"  name="birth_date" value="{{ session('user')->birth_date }}" required>
                </div>
                <div class="form-group">
                    <label >Adresse postale</label>
                    <input type="text" class="form-control" id="adrpostale" placeholder="Adresse postale" name="address" value="{{ session('user')->address }}" required>
                </div>
                <div class="form-group">
                    <label >Numéro de téléphone</label>
                    <input type="text" class="form-control" id="notel" placeholder="Numéro de téléphone" name="notel" value="{{ session('user')->notel }}" required>
                </div>
                <div class="form-group">
                    <label>Mot de passe :</label>
                    <input type="password" class="form-control" id="mdp" placeholder="Choisissez un nouveau mot de passe" name="password" required>
                </div>
                @endif
                @if (Session::has('messageSuccess'))
                    <div class="alert alert-info">{{ Session::get('messageSuccess') }}</div>
                @elseif (Session::has('messageError'))
                    <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                @endif
                <button type="submit" class="btn btn-success" style="width:100%">Valider</button>
                    
        </form>
    </div>
    @else
    <p class="form-text alert alert-info" style="text-align : center; margin-top:18%;">Vous devez être connecté pour continuer, <a href="/connexion">Se connecter</a></p>
    @endif
@endsection