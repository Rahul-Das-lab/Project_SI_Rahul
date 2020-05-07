<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
<a class="btn btn-primary" href="/home" role="button">Home</a>
<h1 style="text-align: center;"> Projet Miage </h1>

<div class="mainzone">
<h6> Connecté en tant que : {{ session('user')->firstname }} {{ session('user')->name }} </h6>
<h3> Envoyer un commentaire à l'administrateur :</h3> <br>

<form method="POST" action="/sendComment">
    @csrf
	<div class="form-group">
    	<label>Votre commentaire : </label>
    	<textarea class="form-control" id="commentaire" name="comment" rows="16"></textarea>
  	</div>

	  @if (Session::has('messageSuccess'))
   		<div class="alert alert-info">{{ Session::get('messageSuccess') }}</div>
	@elseif (Session::has('messageError'))
   		<div class="alert alert-danger">{{ Session::get('messageError') }}</div>
	@endif
	<button type="submit" class="btn btn-success" style="width:100%">Valider</button>	  
</form>

</div>

</body>
</html>