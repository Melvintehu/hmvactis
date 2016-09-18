<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class Event extends Model
{

	protected $dates = [
		'date'
	];

    protected $fillable = [
    	'title',
    	'location',
    	'date',
    	'time',
    	'description',
    	'lustrum_event',
        'subscription'
    ];


    public function addPhoto(Photo $photo)
    {


      $this->photos()->attach($photo->id, ['type' => 'original']); 
      

      return $this->photos()->save($photo);

    }    

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }


    public function setMydateAttribute($date)
    {
        $this->attributes['date'] = Carbon::createFromFormat('Y/M/d', $date);
    }

    public function users(){
        return $this->belongsToMany('App\User')->withTimeStamps();      
    }  
    
}
