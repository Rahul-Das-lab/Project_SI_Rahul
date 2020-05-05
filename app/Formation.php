<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'name',
    ];

    public function candidature(){
        return $this->hasOne('App\Candidature');
    }
}
