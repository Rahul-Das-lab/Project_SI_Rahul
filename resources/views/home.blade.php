@extends('layout.layout')

@section('content')
    <div class="mainzone" style="margin-top:5%">

    <nav class="navbar navbar-light bg-light">
        <!-- Une image d'intro -->
    </nav>
        
        
        @if (session('user')->email ?? false)
            @if (session('user')->type_id == 1) <!-- Admin connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/admin/inbox"><i class="fa fa-envelope"></i>&nbsp;Messagerie</a><br>
                        <a href="/admin/addTeacher"><i class="fa fa-user-plus"></i>&nbsp;Ajouter des professeurs</a><br>
                        <a href="/logout"><i class="fa fa-power-off"></i>&nbsp;Déconnexion </a>
                    </li>
                </ul>
            @elseif (session('user')->type_id == 2) <!-- Etudiant connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/home/profil"> <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Modifier le profil</a><br>
                        <a href="/home/apply"><i class="fa fa-folder"></i>&nbsp;Déposer une candidature</a><br>
                        <a href="/home/commentToAdmin"><i class="fa fa-comment"></i>&nbsp;Envoyer un message à l'administrateur</a><br>
                        <a href="/logout"><i class="fa fa-power-off"></i>&nbsp;Déconnexion </a>
                    </li>
                </ul>
            @elseif (session('user')->type_id == 3) <!-- Professeur connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/home/profil"> Profil</a><br>
                        <a href="/prof/candidatures">Liste des candidatures</a><br>
                        <a href="/logout">Déconnexion </a>
                    </li>
                </ul>
            @endif
        @else <!-- Si aucun utilisateur n'est connecté -->
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