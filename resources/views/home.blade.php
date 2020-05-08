@extends('layout.layout')

@section('content')
    <div class="mainzone" style="margin-top:15%">
        
        @if (session('user')->email ?? false)
            @if (session('user')->type_id == 1) <!-- Admin connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/admin/inbox">Messagerie</a><br>
                        <a href="/admin/addTeacher">Ajouter des professeurs</a><br>
                        <a href="/logout">Déconnexion </a>
                    </li>
                </ul>
            @elseif (session('user')->type_id == 2) <!-- Etudiant connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/home/profil"> Modifier le profil</a><br>
                        <a href="/home/apply"> Déposer une candidature</a><br>
                        <a href="/home/commentToAdmin"> Envoyer un message à l'administrateur</a><br>
                        <a href="/logout">Déconnexion </a>
                    </li>
                </ul>
            @elseif (session('user')->type_id == 3) <!-- Professeur connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#"> Profil</a><br>
                        <a href="/home/apply">Liste des candidatures</a><br>
                        <a href="/logout">Déconnexion </a>
                    </li>
                </ul>
            @endif
        @else
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/inscription"> Page d'inscription </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/connexion"> Page de connexion </a>
                    </li>
                </ul>
        @endif
    </div>
@endsection