<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'firstname', 'password', 'card_id', 'birth_date', 'address', 'notel', 'email', 'type', 'comment',
    ];
    protected $primaryKey = "email";

    protected $dates = [
        'birth_date',
    ];

    public $incrementing = false;
}
