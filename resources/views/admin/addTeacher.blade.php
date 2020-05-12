@extends('layout.layout')

@section('content')

    
    
    <div class="mainzone">
        @if(session('user')->email ?? '')
            @if(session('user')->type_id == 1 ?? '')
            
            <form method="POST" action="/newTeacher">
                @csrf
                <h3> Création de comptes professeurs</h3><br>
                    <small id="emailHelp" class="form-text text-muted alert alert-info">Jusqu'à 5 utilisateurs professeurs peuvent être créée simultanément. </small>
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
                                <input style="content-align: center" type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email_1" required>
                            </td>
                            <td>
                                <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password_1" id="password">
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td scope="row">
                                <input type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email_2" required>
                            </td>
                            <td>
                                <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password_2" id="password">
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td scope="row">
                                <input type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email_3" required>
                            </td>
                            <td>
                                <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password_3" id="password">
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">4</th>
                            <td scope="row">
                                <input type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email_4" required>
                            </td>
                            <td>
                                <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password_4" id="password">
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">5</th>
                                <td scope="row">
                                    <input type="email" class="form-control" id="email" placeholder="Une adresse mail" name="email_5" required>
                                </td>
                                <td>
                                    <input type="text" class="form-control gen" placeholder="Mot de passe *" required="required" name="password_5" id="password">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button id="btnVal" type="submit" class="btn btn-success" style="width:100%">Valider</button>

                    @if (Session::has('messageSuccess'))
                        <div id="successMsg"class="alert alert-success" style="text-align:center;">{{ Session::get('messageSuccess') }}</div>
                    @elseif (Session::has('messageError'))
                        <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                    @endif
                    <br>
                    @if(Session::has('email_1'))
                    <div class="alert alert-info" style="text-align:center;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProf">
                            Voir les identifiants de professeur créés
                        </button>
                    </div>
                            
                            <div class="modal fade" id="modalProf" tabindex="-1" role="dialog" aria-labelledby="ModalProfLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalProfLabel">Liste des identifiants des professeurs créés</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    

                                <table class="table table-striped table-responsive-md btn-table" id="CreatedTeachers">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Emails</th>
                                        <th>Mots de passes</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                {{Session::get('email_1')}} 
                                            </td>
                                            <td>
                                                {{Session::get('password_1')}} 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                {{Session::get('email_2')}} 
                                            </td>
                                            <td>
                                                {{Session::get('password_2')}} 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                {{Session::get('email_3')}} 
                                            </td>
                                            <td>
                                                {{Session::get('password_3')}} 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                {{Session::get('email_4')}} 
                                            </td>
                                            <td>
                                                {{Session::get('password_4')}} 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                {{Session::get('email_5')}} 
                                            </td>
                                            <td>
                                                {{Session::get('password_5')}} 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>





                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                                </div>
                            </div>
                            </div>
                    @endif
                </form>
            </div>
            @else
                <p id="emailHelp" class="form-text alert alert-danger" style="text-align : center; margin-top:18%;">Error 403 : Vous n'avez pas les droits d'accès à cette page</p>
            @endif
    @else
        <p class="form-text alert alert-info" style="text-align : center; margin-top:18%;">Vous devez être connecté pour continuer, <a href="/connexion">Se connecter</a></p>
    @endif
@endsection