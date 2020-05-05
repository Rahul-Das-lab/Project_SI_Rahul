<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $fillable = [
        'status_id', 'formation_id', 'type', 'email', 'curriculumvitae', 'lettermotivation', 'notes', 'screenshotENT', 'identity',
    ];

    public function user(){
        return $this->belongsTo('App\Users');
    }
    public function status(){
        return $this->belongsTo('App\Status');
    }
    public function formation(){
        return $this->belongsTo('App\Candidature');
    }
}
