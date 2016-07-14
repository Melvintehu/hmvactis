<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMember extends Model
{
    protected $fillable = [
    	'committee_id',
    	'name',
    	'role',
    	'email',
    	'study', 
    ];

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }

    public function committee(){
    	return $this->belongsTo('App\Committee');
    }



}
