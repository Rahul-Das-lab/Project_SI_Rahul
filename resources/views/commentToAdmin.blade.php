@extends('layout.layout')

@section('content')
		<div class="mainzone">
		@if (session('user')->email ?? "")
			@if (session('user')->type_id == 2)
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
			@else
			<p class="form-text alert alert-danger" style="text-align : center; margin-top:18%;">Error 403 : Vous n'avez pas les droits d'accès à cette page </p>
			@endif
		@else
			<p id="emailHelp" class="form-text alert alert-info" style="text-align : center; margin-top:18%;">Vous devez être connecté pour continuer, <a href="/connexion">Se connecter</a></p>
		@endif
		</div>
		

@endsection