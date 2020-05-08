<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use File;
use Illuminate\Support\Facades\Storage;
use App\Candidature;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{

    public function apply(Request $request){
        $status = $request->input('status');
        $formation = $request->input('formation');
        $type = $request->input('type');
        $email = session('user')->email;

        // $cv = $request->file('curriculumvitae');
        // $formulaireIns = $request->file('formulaireInscription');
        // $ldm = $request->file('lettermotivation');
        // $notes = $request->file('notes');
        // $screenshotENT = $request->file('screenshotENT');
        // $identity = $request->file('identity');
        //echo "cv : " . $cv;
        //echo "status : " . $status;

        $candidature = Candidature::where(["email"=>$email])->count();
        //echo $candidature;
        if($candidature == 0){
            //File::makeDirectory('storage/dossier'.$email, 0777, true);
            
            $pathCV = $request->file('curriculumvitae')->storeAs('dossier_'.$email, $request->file('curriculumvitae')->getClientOriginalName());
            $pathCV = $request->file('formulaireInscription')->storeAs('dossier_'.$email, $request->file('formulaireInscription')->getClientOriginalName());
            $pathLDM = $request->file('lettermotivation')->storeAs('dossier_'.$email, $request->file('lettermotivation')->getClientOriginalName());
            $pathNotes = $request->file('notes')->storeAs('dossier_'.$email, $request->file('notes')->getClientOriginalName());
            $pathScreenshotENT = $request->file('screenshotENT')->storeAs('dossier_'.$email, $request->file('screenshotENT')->getClientOriginalName());
            $pathIdentity = $request->file('identity')->storeAs('dossier_'.$email, $request->file('identity')->getClientOriginalName());
        
        
            $insert = Candidature::create([
                "status_id" => $status,
                "formation_id" => $formation,
                "type" => $type,
                "email" => $email,
                "curriculumvitae" => $request->file('curriculumvitae')->getClientOriginalName(),
                "formulaireInscription" => $request->file('formulaireInscription')->getClientOriginalName(),
                "lettermotivation" => $request->file('lettermotivation')->getClientOriginalName(),
                "notes" => $request->file('notes')->getClientOriginalName(),
                "screenshotENT" => $request->file('screenshotENT')->getClientOriginalName(),
                "identity" => $request->file('identity')->getClientOriginalName(),
            ]);


            if($insert){
                Session::flash('messageSuccess', "Votre candidature a bien été envoyé");
                return Redirect::back();
                //return redirect()->back()->with(['message' => 'Candidature envoyé']);
            }
            else{
                Session::flash('messageError', "Erreur lors de la candidature");
                return Redirect::back();
            }
        }
        else{
            //il existe déjà une candidature de cet étudiant
            //return redirect()->back()->with(['message' => 'Vous avez déjà candidaté']);
            Session::flash('messageError', "Vous avez déjà candidaté, vous ne pouvez pas soumettre une deuxième candidature");
            return Redirect::back();
        }
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
     * @param  \App\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function show(Candidature $candidature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidature $candidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidature $candidature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidature  $candidature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidature $candidature)
    {
        //
    }
}
