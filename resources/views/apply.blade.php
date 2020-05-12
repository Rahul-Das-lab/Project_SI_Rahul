@extends('layout.layout')
@section('content')

<div class="mainzone">
	@if (session('user')->email ?? "")
		@if(session('user')->type_id == 2)
			<h3> Déposer une candidature :</h3> <br>

			<form method="POST" action="/candidate" enctype="multipart/form-data">
				@csrf
					<div class="form-group">
					<label for="formation">Choissisez une formation</label>
					<select class="form-control" id="formation" name="formation">
						<option value="1">L3 Miage</option>
						<option value="2">M1 Miage</option>
						<option value="3">M2 Miage</option>
					</select>
					</div>
					<div class="form-group">
					<label for="formation">Type de candidature :</label>
					<select class="form-control" id="typeformation" name="type">
						<option value="Initiale">Initiale</option>
						<option value="Apprentissage">Apprentissage</option>
						<option value="Les deux">Les deux</option>
					</select>
					</div>
					<div class="form-group">
						<label>Uploader votre CV :</label>
						<input type="file" class="form-control-file" id="CV" name="curriculumvitae" required>
					</div>
					<div class="form-group">
						<label>Uploader votre formulaire d'inscription :</label>
						<input type="file" class="form-control-file" id="CV" name="formulaireInscription" required>
					</div>
					<div class="form-group">
						<label>Uploader votre Lettre de motivation :</label>
						<input type="file" class="form-control-file" id="ldm" name="lettermotivation" required>
					</div>
					<div class="form-group">
						<label>Uploader vos relevés de notes :</label>
						<input type="file" class="form-control-file" id="relevenotes" name="notes" required>
					</div>
					<div class="form-group">
						<label>Uploader une impression d'écran de l'ENT de votre année actuelle :</label>
						<input type="file" class="form-control-file" id="screenshot" name="screenshotENT" required>
					</div>
					<div class="form-group">
						<label>Uploader votre pièce d'identité en cours de validité :</label>
						<input type="file" class="form-control-file" id="pieceidentite" name="identity" required>
					</div>
					<input type="number" name="status" value="1" hidden>

					@if (Session::has('messageSuccess'))
						<div class="alert alert-info">{{ Session::get('messageSuccess') }}</div>
					@elseif (Session::has('messageError'))
						<div class="alert alert-danger">{{ Session::get('messageError') }}</div>
					@endif
					<button type="submit" class="btn btn-success" style="width:100%">Valider</button>	  
			</form>
		@else
		<p class="form-text alert alert-danger" style="text-align : center; margin-top:18%;">Error 403 : Vous n'avez pas les droits d'accès à cette page </p>
		@endif
	@else
		<p class="form-text alert alert-info" style="text-align : center; margin-top:18%;">Vous devez être connecté pour continuer, <a href="/connexion">Se connecter</a></p>
	@endif
		
</div>

@endsection