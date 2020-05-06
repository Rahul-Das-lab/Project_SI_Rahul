<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>

<h1 style="text-align: center;"> Projet Miage </h1>

<div class="mainzone">
<h6> Connecté en tant que : {{ session('user')->firstname }} {{ session('user')->name }} </h6>
<h3> Déposer une candidature :</h3> <br>

<form method="POST" action="/depotcandidature">
			


		<div class="form-group">
	    <label for="formation">Choissisez une formation</label>
	    <select class="form-control" id="formation" name="formation">
            <option value="Initiale">L3 Miage</option>
            <option value="Initiale">M1 Miage</option>
            <option value="Initiale">M2 Miage</option>
	    </select>
  		</div>
  		<div class="form-group">
	    <label for="formation">Type de candidature :</label>
	    <select class="form-control" id="typeformation" name="typeformation">
		    <option value="Initiale">Initiale</option>
		    <option value="Apprentissage">Apprentissage</option>
		    <option value="Les deux">Les deux</option>
	    </select>
  		</div>


		<div class="form-group">
			<label>Uploader votre CV :</label>
		  	<input type="file" class="form-control-file" id="CV" name="CV">
  		</div>
  		<div class="form-group">
			<label>Uploader votre Lettre de motivation :</label>
		  	<input type="file" class="form-control-file" id="ldm" name="ldm">
  		</div>
  		<div class="form-group">
			<label>Uploader vos relevés de notes :</label>
		  	<input type="file" class="form-control-file" id="relevenotes" name="relevenotes">
  		</div>
  		<div class="form-group">
			<label>Uploader une impression d'écran de l'ENT de votre année actuelle :</label>
		  	<input type="file" class="form-control-file" id="screenshot" name="screenshot">
  		</div>
  		<div class="form-group">
			<label>Uploader votre formulaire d'inscription :</label>
		  	<input type="file" class="form-control-file" id="formulaireIns" name="formulaireIns">
  		</div>
  		<div class="form-group">
			<label>Uploader votre pièce d'identité en cours de validité :</label>
		  	<input type="file" class="form-control-file" id="pieceidentite" name="pieceidentite">
  		</div>



		<button type="submit" class="btn btn-success" style="width:100%">Valider</button>	  
</form>

</div>

</body>
</html>