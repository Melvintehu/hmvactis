<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

   	protected $dates = [
   		'publish_date',
   		'date_added'
   	];

 	  protected $fillable = [
   		'title',
   		'publish_date',
   		'date_added',
   		'description',
   	];

    public function photos(){
        return $this->belongsToMany('App\Photo')->withPivot('type')->withTimeStamps();      
    }



    public function setMydateAttribute($date)
    {
        $this->attributes['publish_date'] = Carbon::createFromFormat('Y/M/d', $date);
    }



}
