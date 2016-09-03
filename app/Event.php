<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    	'lustrum_event'
    ];

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }

    public function setMydateAttribute($date)
    {
        $this->attributes['publish_date'] = Carbon::createFromFormat('Y/M/d', $date);
    }


 

    public function users(){
        return $this->belongsToMany('App\User')->withTimeStamps();      
    }  
    
}
