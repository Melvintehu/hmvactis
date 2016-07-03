<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

	protected $fillable = [
		'path',
	];

	public function news(){
		return $this->belongsToMany('App\News')->withPivot('type')->withTimeStamps();
	}

	public function events(){
		return $this->belongsToMany('App\Event')->withPivot('type')->withTimeStamps();
	}

	public function committeeMembers(){
		return $this->belongsToMany('App\CommitteeMember')->withPivot('type')->withTimeStamps();
	}	

	public function sponsors(){
		return $this->belongsToMany('App\Sponsor')->withPivot('type')->withTimeStamps();
	}	

	public function sponsorDiscounts(){
		return $this->belongsToMany('App\Sponsor')->withPivot('type')->withTimeStamps();
	}	

	public function pageSections(){
		return $this->belongsToMany('App\PageSection')->withPivot('type')->withTimeStamps();
	}

	public function boardMembers(){
		return $this->belongsToMany('App\BoardMember')->withPivot('type')->withTimeStamps();
	}	

	public function Vacancies(){
		return $this->belongsToMany('App\Vacanie')->withPivot('type')->withTimeStamps();
	}	

}
