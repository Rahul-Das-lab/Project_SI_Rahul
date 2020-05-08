@extends('layout.layout')

@section('content')
    <div class="mainzone">
        <form method="POST" action="/connectUser">
            @csrf
            <h3> Création de comptes professeurs</h3><br>

            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Emails</th>
                    <th scope="col">Mot de passes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td scope="row">
                        <input style="content-align: center" type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email" required>
                    </td>
                    <td>
                        <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password" id="password">
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td scope="row">
                        <input type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email" required>
                    </td>
                    <td>
                        <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password" id="password">
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td scope="row">
                        <input type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email" required>
                    </td>
                    <td>
                        <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password" id="password">
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td scope="row">
                        <input type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email" required>
                    </td>
                    <td>
                        <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password" id="password">
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td scope="row">
                        <input type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email" required>
                    </td>
                    <td>
                        <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password" id="password">
                    </td>
                    </tr>

                </tbody>
                </table>
            <small id="emailHelp" class="form-text text-muted alert alert-info">Jusqu'à 5 utilisateurs professeurs peuvent être créée simultanément. </small>
            @if (Session::has('messageSuccess'))
                <div class="alert alert-info">{{ Session::get('messageSuccess') }}</div>
            @elseif (Session::has('messageError'))
                <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
            @endif
            <br>
            <button type="submit" class="btn btn-success" style="width:100%">Valider</button>
            
        </form>
    </div>

@endsection