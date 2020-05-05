<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $fillable = [
        'type', 'email', 'curriculumvitae', 'lettermotivation', 'notes', 'screenshotENT', 'identity',
    ];
}
