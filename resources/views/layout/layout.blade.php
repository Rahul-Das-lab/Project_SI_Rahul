<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GCM</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/javascript.js')}}"> </script>
    <script src="https://use.fontawesome.com/7dd193d3c9.js"></script>
    



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow p-3 mb-5 rounded" style="background-color: #a5cbf8;">
            <div class="container">
                <a class="navbar-brand text-white" href="/home">
                    <h3>GCM</h3>
                </a>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Element de navigation à gauche  -->
                </div>
                <!-- Element de navigation à droite  -->
                @if(session('user')->email ?? '')
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    @if(session('user')->type_id == 1)
                        <span class="navbar-brand nav-link text-grey text-muted" style="font-size:20px" href="/home">
                            Administrateur
                        </span>
                    @elseif(session('user')->type_id == 2)
                        <span class="navbar-brand nav-link text-grey text-muted" style="font-size:20px" href="/home">
                            Étudiant
                        </span>
                    @else
                        <span class="navbar-brand nav-link text-grey text-muted" style="font-size:20px" href="/home">
                            Professeur
                        </span>
                    @endif
                </li>
                </ul>
                    <div class="dropdown">
                        @if ( session('user')->name != null )
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ session('user')->name }} {{ session('user')->firstname }}</button>
                        @else
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ session('user')->email }}</button>
                        @endif
                        <ul class="dropdown-menu">
                            <li>&nbsp;<a href="/home/profil" class="text-decoration-none"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Profil</a></li>
                            <li>&nbsp;<a href="/logout" class="text-decoration-none"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp; Déconnexion</a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="\logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Vous n'êtes pas connecté</button>
                        <ul class="dropdown-menu">
                            <li>&nbsp;<a href="/connexion" class="text-decoration-none">Connexion</a></li>
                            <li>&nbsp;<a href="/inscription" class="text-decoration-none">Inscription</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/javascript.js')}}"> </script>
</body>
</html>
