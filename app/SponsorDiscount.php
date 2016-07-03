<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorDiscount extends Model
{
    protected $fillable = [
    	'sponsor_id',
    	'title',
    	'description',
    ];

    public function sponsor(){
    	return $this->belongsTo('App\Sponsor');
    }

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }

    
}
