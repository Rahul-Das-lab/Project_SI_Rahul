@extends('layout.layout')
@section('content')

    @if(session('user')->email ?? '')
        @if(session('user')->type_id == 1 ?? '')
            <div class="mainzone" style="margin-top:8%; width:900px">
                
                <!-- Lister tous les commentaires par étudiant -->
                
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Messagerie</th>
                        </tr>
                    </thead>
                </table>
                <div style='overflow-y:auto; overflow-x:hidden; height:700px;'>

                    <table class="table table-bordered" >
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Étudiant</th>
                                <th scope="col">Commentaire</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key=>$user)
                                    @if($user->comment != null)
                                        <tr>
                                        <td scope="row" style="border: 1px solid #98afaf;">
                                            {{$user->name}} {{$user->firstname}}
                                        </td>
                                        <td style="border: 1px solid #98afaf;">
                                            <textarea class="comment" disabled>{{$user->comment}}</textarea>
                                        </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>

        @elseif(session('user')->type_id == 2 || session('user')->type_id == 3)
            <p id="emailHelp" class="form-text alert alert-danger" style="text-align : center; margin-top:18%;">Error 403 : Vous n'avez pas les droits d'accès à cette page</p>
        @endif
    @else
        <p class="form-text alert alert-info" style="text-align : center; margin-top:18%;">Vous devez etre connecté pour continuer, <a href="/connexion">Se connecter</a></p>
    @endif
@endsection