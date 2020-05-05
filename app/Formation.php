<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function candidature(){
        return $this->hasOne('App\Candidature');
    }
}
