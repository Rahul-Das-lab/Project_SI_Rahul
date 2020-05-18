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
                        <a href="/admin/inbox" class="text-decoration-none"><i class="fa fa-envelope" ></i>&nbsp;Messagerie</a><br>
                        <a href="/admin/addTeacher" class="text-decoration-none"><i class="fa fa-user-plus"></i>&nbsp;Ajouter des professeurs</a><br>
                        <a href="/logout" class="text-decoration-none"><i class="fa fa-power-off"></i>&nbsp;Déconnexion </a>
                    </li>
                </ul>
            @elseif (session('user')->type_id == 2) <!-- Etudiant connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/home/profil" class="text-decoration-none"> <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Modifier le profil</a><br>
                        <a href="/home/apply" class="text-decoration-none"><i class="fa fa-folder"></i>&nbsp;Déposer une candidature</a><br>
                        <a href="/home/commentToAdmin" class="text-decoration-none"><i class="fa fa-comment"></i>&nbsp;Envoyer un message à l'administrateur</a><br>
                        <a href="/logout" class="text-decoration-none"><i class="fa fa-power-off"></i>&nbsp;Déconnexion </a>
                    </li>
                </ul>
            @elseif (session('user')->type_id == 3) <!-- Professeur connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/home/profil" class="text-decoration-none"> Profil</a><br>
                        <a href="/prof/candidatures" class="text-decoration-none">Liste des candidatures</a><br>
                        <a href="/logout" class="text-decoration-none">Déconnexion </a>
                    </li>
                </ul>
            @endif
        @else <!-- Si aucun utilisateur n'est connecté -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/inscription" class="text-decoration-none"> Page d'inscription </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/connexion" class="text-decoration-none"> Page de connexion </a>
                    </li>
                </ul>
        @endif
    </div>
@endsection