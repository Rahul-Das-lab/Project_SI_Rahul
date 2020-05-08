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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/home">
                    GCM Nanterre
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                </div>
                @if(session('user')->email ?? '')
                        <!-- <ul style="text-align:left">
                            {{session('user')->email}}
                        </ul> -->
                
                    <div class="dropdown">
                        @if ( session('user')->name != null )
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ session('user')->name }}</button>
                        @else
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ session('user')->email }}</button>
                        @endif
                        <ul class="dropdown-menu">
                            <li><a href="/home/profil">Profil</a></li>
                            <li><a href="/logout">Déconnexion</a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="\logout" method="POST" style="display: none;">
                        @csrf
                    </form>
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
