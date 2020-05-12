@extends('layout.layout')

@section('content')

    <div class="mainzone" style="margin-top:4%; width:80%">
    
        
        @if(session('user')->email ?? "")

        
            <div style='overflow-y:auto; overflow-x:hidden; height: 720px; '>
            
            <input id="filter" type="text" class="form-control" style="width:300px" placeholder="Rechercher un candidat...">
            
            <table class="table table-striped table-responsive-md btn-table" id="candidatureTable">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom et prénom</th>
                    <th>Email</th>
                    <th>Formation demandée</th>
                    <th>Type de formation</th>
                    <th>Formulaire d'inscription</th>
                    <th>CV</th>
                    <th>Lettre de motivation</th>
                    <th>Relevé de notes</th>
                    <th>Imprime écran ENT</th>
                    <th>Pièce d'identité</th>
                    <th>Télécharger le dossier complet</th>
                    <th>Statut de la demande</th>
                </tr>
                </thead>

                <tbody class="searchable">
                    @foreach($appliances as $appliance)
                   
                    
                    <tr>
                        <th scope="row">{{$appliance->id}}</th>
                        <td>
                            {{$appliance->user->name}} {{$appliance->user->firstname}}
                        </td>
                        <td>
                            {{$appliance->email}}
                        </td>
                        <td>
                            {{$appliance->formation->name}}
                        </td>
                        <td>
                            {{$appliance->type}}
                        </td>
                        <td>
                            <a href="/storage/dossier_{{$appliance->email}}/{{$appliance->formulaireInscription}}" download="{{$appliance->user->name}}_{{$appliance->formulaireInscription}}" type="button" class="btn btn-elegant btn-download waves-effect btn-sm">Télécharger</button>
                        </td>
                        <td>
                            <a href="/storage/dossier_{{$appliance->email}}/{{$appliance->curriculumvitae}}" download="{{$appliance->user->name}}_{{$appliance->curriculumvitae}}" type="button" class="btn btn-elegant btn-download waves-effect btn-sm">Télécharger</button>
                        </td>
                        <td>
                            <a href="/storage/dossier_{{$appliance->email}}/{{$appliance->lettermotivation}}" download="{{$appliance->user->name}}_{{$appliance->lettermotivation}}" type="button" class="btn btn-elegant btn-download waves-effect btn-sm">Télécharger</button>
                        </td>
                        <td>
                            <a href="/storage/dossier_{{$appliance->email}}/{{$appliance->notes}}" download="{{$appliance->user->name}}_{{$appliance->notes}}" type="button" class="btn btn-elegant btn-download waves-effect btn-sm">Télécharger</button>
                        </td>
                        <td>
                            <a href="/storage/dossier_{{$appliance->email}}/{{$appliance->screenshotENT}}" download="{{$appliance->user->name}}_{{$appliance->screenshotENT}}" type="button" class="btn btn-elegant btn-download waves-effect btn-sm">Télécharger</button>
                        </td>
                        <td>
                            <a href="/storage/dossier_{{$appliance->email}}/{{$appliance->identity}}" download="{{$appliance->user->name}}_{{$appliance->identity}}" type="button" class="btn btn-elegant btn-download waves-effect btn-sm">Télécharger</button>
                        </td>
                        <td>
                            <a href="/storage/dossier_{{$appliance->email}}.com" download="dossier_complet_{{$appliance->user->name}}.com"  type="button" class="btn btn-success btn-sm">Télécharger</button>
                        </td>
                        <td>
                        <form method="POST" action="/changeStatut">
                        @csrf
                        <input name='mail' value="{{$appliance->email}}" hidden>
                        <select name="statut" style="width:120px" onChange="this.parentNode.submit()";>
                            <option value=""disabled selected="selected">{{$appliance->Status->name}}</option>
                            @foreach($statuses as $statut)
                                <option value="{{$statut->id}}">{{$statut->name}}</option>
                            @endforeach
                        </select>
                        </form>
                        </td>
                        
                    </tr>
                    
                    @if($loop->last)
                        <p style="text-align:right">{{$loop->count}} candidature(s) trouvée(s)<p>
                    @endif
                @endforeach


                </tbody>

                </table>
        </div>
        @endif
    </div>

@endsection