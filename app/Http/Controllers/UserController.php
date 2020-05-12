<?php

namespace App\Http\Controllers;
use Redirect;
use Session;
use File;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function add(Request $request){
        $request->flashExcept('password');

        $nom = $request->input("nom");
        $prenom = $request->input("prenom");
        $email = $request->input("email");
        $password = $request->input("password");
        $cardid = $request->input("nocarteid");
        $birth_date = $request->input("datenaiss");
        $address = $request->input("adrpostale");
        $notel = $request->input("notel");
        $type_id = $request->input("type_id");
        
        $check = User::find($email);
        if(!$check){
            $var = User::create([
                "email" => $email,
                "name" => $nom,
                "firstname" => $prenom,
                "password" => $password,
                "card_id" => $password,
                "birth_date" => $birth_date,
                "address" => $address,
                "notel" => $notel,
                "type_id" => $type_id
            ]);
            if($var != NULL){
                return $this->connexionUser($request);
            }
        }
        else{
            Session::flash('messageError', 'Cette adresse mail a déjà été utilisé');
            return redirect('inscription')->withInput(
                $request->except('password')
            );
        }
  
    }

    public function connexionUser(Request $request){
        $request->flashExcept('password');
        $email = $request->input("email");
        $password = $request->input("password");

        $var = User::where(["email"=>$email, "password"=>$password])->first();
        if($var != NULL){

            session()->put('user', $var);
            //dd($t);
            //echo $var->admin;
            return redirect("home");
        }
        else{
            Session::flash('messageError', "Connexion impossible, vérifiez vos identifiants");
            return redirect('connexion')->withInput(
                $request->except('password')
            );
        }
        
        
    }

    public function modifierProfil(Request $request){
        $request->flashExcept('password');

        $name = $request->input("name");
        $firstname = $request->input("firstname");
        $email = $request->input("email");
        $password = $request->input("password");
        $card_id = $request->input("card_id");
        $birth_date = $request->input("birth_date");
        $address = $request->input("address");
        $notel = $request->input("notel");
        
        $user = User::find($email);
        if($user){
            $user->update([
                "email"=>$email,
                "name"=>$name,
                "firstname"=>$firstname,
                "password"=>$password,
                "card_id"=>$card_id,
                "birth_date"=>$birth_date,
                "address"=>$address,
                "notel"=>$notel
                ]);
            $user->save();

            session()->put('user',$user);
            Session::flash('messageSuccess', "Modifications effectuées");
            return Redirect::back();
        }
        else{

            Session::flash('messageError', "Erreur lors de la modification");
            return Redirect::back()->withInput(
                $request->except('password')
            );
            
        }
    }

    public function comment(Request $request){
        $comment = $request->input('comment');
        $email = session('user')->email;
        $user = User::find($email);
        if($user){

            $user->update([
                "comment"=>$comment
                ]);
            $user->save();

            session()->put('user',$user);
            Session::flash('messageSuccess', "Votre commentaire a bien été envoyé.");
            return Redirect::back();
        }
        else{
            Session::flash('messageError', "Erreur lors de l'envoie du commentaire.");
            return Redirect::back();
        }
        
    }



    public function listmsg(){

        $users = User::where(["type_id"=>2])->get();
        //dd($users);
        return view("admin/inbox", compact('users'));
    }

    public function addTeacher(){
        return view("admin/addTeacher");
    }


    public function newTeacher(Request $request){
        $email_1 = $request->input('email_1');
        $password_1 = $request->input('password_1');
        $email_2 = $request->input('email_2');
        $password_2 = $request->input('password_2');
        $email_3 = $request->input('email_3');
        $password_3 = $request->input('password_3');
        $email_4 = $request->input('email_4');
        $password_4 = $request->input('password_4');
        $email_5 = $request->input('email_5');
        $password_5 = $request->input('password_5');

        // for($i=1; $i<=5; $i++){
        //     $test = ($email_ . $i);
        //     User::create([
        //         "email" => $email_ . '' . $i,
        //         "password" => $password_ . '' . $i,
        //     ]);
        // }

        User::create([
            "email" => $email_1,
            "type_id" => 3,
            "password" => $password_1
        ]);
        User::create([
            "email" => $email_2,
            "type_id" => 3,
            "password" => $password_2
        ]);
        User::create([
            "email" => $email_3,
            "type_id" => 3,
            "password" => $password_3
        ]);
        User::create([
            "email" => $email_4,
            "type_id" => 3,
            "password" => $password_4
        ]);
        User::create([
            "email" => $email_5,
            "type_id" => 3,
            "password" => $password_5
        ]);

        //$test = [$email_1, $password_1];
        $request->session()->flash('email_1', $email_1);
        $request->session()->flash('password_1', $password_1);
        $request->session()->flash('email_2', $email_2);
        $request->session()->flash('password_2', $password_2);
        $request->session()->flash('email_3', $email_3);
        $request->session()->flash('password_3', $password_3);
        $request->session()->flash('email_4', $email_4);
        $request->session()->flash('password_4', $password_4);
        $request->session()->flash('email_5', $email_5);
        $request->session()->flash('password_5', $password_5);
        
        Session::flash('messageSuccess', "Professeurs ajoutés ! Veillez à enregistrer et transmettre les identifiants des professeurs créés avant d'en créer de nouveaux");
        return Redirect::back();
        
    }


















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
