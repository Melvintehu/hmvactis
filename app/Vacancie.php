<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancie extends Model
{
    protected $fillable = [
    	'title',
    	'details',
    	'description', 
    ];
}
