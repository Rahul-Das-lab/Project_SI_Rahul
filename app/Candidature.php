<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'status_id', 'formation_id', 'type', 'email', 'curriculumvitae', 'formulaireInscription', 'lettermotivation', 'notes', 'screenshotENT', 'identity',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'email', 'email');
    }
    public function status(){
        return $this->belongsTo('App\Status');
    }
    public function formation(){
        return $this->belongsTo('App\Formation');
    }

}
