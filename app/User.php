<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'firstname', 'password', 'card_id', 'birth_date', 'address', 'notel', 'email', 'type_id', 'comment',
    ];
    protected $primaryKey = "email";

    protected $dates = [
        'birth_date',
    ];

    public $incrementing = false;

    public function candidature(){
        return $this->hasOne('App\Candidature', 'email', 'email');
    }

    //Type of user
    public function type(){
        return $this->hasOne('App\Type', 'type', 'type');
    }
}
