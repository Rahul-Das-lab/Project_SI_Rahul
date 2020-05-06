<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>

<h1 style="text-align: center;"> Projet Miage </h1>

<div class="mainzone">
<h3> Envoyer un commentaire à l'administrateur :</h3> <br>

<form method="POST" action="/sendComment">

	<div class="form-group">
    	<label>Votre commentaire : </label>
    	<textarea class="form-control" id="commentaire" name="commentaire" rows="16"></textarea>
  	</div>


	<button type="submit" class="btn btn-success" style="width:100%">Valider</button>	  
</form>

</div>

</body>
</html>