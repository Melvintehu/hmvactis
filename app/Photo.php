<?php

namespace App;

use Image;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

	protected $fillable = [
		'path',
		'thumbnail_path',
		'name'
	];

	protected $thumbnailWidth = 200;
	protected $thumbnailHeight = 200;

	protected $baseDir = 'application-photos';

	public function setThumbnailDimensions($height, $width)
	{
		$this->thumbnailHeight = $height;
		$this->thumbnailWidth = $width;

		return $this;
	}


	public static function named( $name, $dir)
	{	

		return (new static)->saveAs($name, $dir);

	}

	public function saveAs($name, $dir)
	{
		$this->baseDir = $this->baseDir . '/' . $dir . '/photos';
		$this->name = sprintf("%s-%s", time(), $name); 
		$this->path = sprintf("%s/%s", $this->baseDir, $this->name);
		$this->thumbnail_path = sprintf("%s/tn-%s", $this->baseDir, $this->name);

		return $this;

	}

	public function move($file)
	{

		$file->move($this->baseDir, $this->name);	

		$this->makeThumbnail();

		return $this;

	}


	protected function makeThumbnail()
	{

		Image::make($this->path)
			->fit($this->thumbnailHeight, $this->thumbnailWidth)->save($this->thumbnail_path);

		return $this;

	}


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
