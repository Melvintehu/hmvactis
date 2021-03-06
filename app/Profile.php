<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Profile extends Model
{   

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'name',
    	'street',
    	'place',
    	'house_number',
    	'phone_number',
    	'email_address',
    	'birthdate',
    	'current_study',
    	'study_year',
    	'student_number',
    	'iban',
    	'tnv',
    	'subscribed',
        'user_id'
    ];


    
}
