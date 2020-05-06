<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Home</title>
</head>

<body>
    
    <div class="mainzone">
        <h3> Bienvenue {{ session('user')->firstname }} </h3>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="/home/profil"> Modifier le profil</a><br>
                <a href="/home/apply"> Déposer une candidature</a><br>
                <a href="/home/commentToAdmin"> Envoyer un message à l'administrateur</a>
            </li>
        </ul>
    </div>
</body>
</html>