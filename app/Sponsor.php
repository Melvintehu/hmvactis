<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
    	'name',
    	'website',
    	'description',
    	'main_partner',
    ];


    public function discounts(){
    	return $this->hasMany('App\SponsorDiscount');
    }


    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }  

}
