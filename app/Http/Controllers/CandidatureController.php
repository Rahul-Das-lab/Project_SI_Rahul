<?php

namespace App\Http\Controllers;
use Redirect;
use Session;

use File;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\User;
use Illuminate\Http\Request;

use App\Candidature;
use App\Status;


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
            $pathFormulaireInscription = $request->file('formulaireInscription')->storeAs('dossier_'.$email, $request->file('formulaireInscription')->getClientOriginalName());
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


    public function listCandidatures(){
        $appliances = Candidature::all();
        //dd($appliances);
        $statuses = Status::all();
        return view("prof/candidatures", compact('appliances', 'statuses'));
    }


    public function updateStatut(Request $request){
        $statut = $request->input('statut');
        $mail = $request->input('mail');
        //dd($statut);
        //Session::flash('statut', $statut);

        $existCand = Candidature::where(['email' => $mail])
            ->update(['status_id'=> $statut]);

        //dd($existCand);
        // $existCand->update([
        //     "statut_id"=>$statut
        //     ]);
        
        //$existCand->status_id = $statut;
        //$existCand->save();

        
        return Redirect::back();
        
    }














}
