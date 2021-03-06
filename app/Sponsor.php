<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class Sponsor extends Model
{
    protected $fillable = [
    	'name',
    	'website',
    	'description',
    	'main_partner',
        'no_sponsor'
    ];


    public function discounts(){
    	return $this->hasMany('App\SponsorDiscount');
    }


    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    } 

    public function addPhoto(Photo $photo)
    {
      
      $this->photos()->attach($photo->id, ['type' => 'original']); 
      
      return $this->photos()->save($photo);

    }


}
