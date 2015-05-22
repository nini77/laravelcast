<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articles extends Model {

	protected $fillable = [
		'title',
		'body',
		'published_at',
		'user_id'
	];


	protected $date = ['published_at'];

	public function scopePublished($query)
	{
			$query->where('published_at','<=', Carbon::now());
	}

	public function scopeUnPublished($query)
	{
			$query->where('published_at','>=', Carbon::now());
	}


	public function setPublishedAtAttribute($date)
	{

			$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);

	}

	public function getPublishedAtAttribute($date)
	{
		return Carbon::parse($date)->format('Y-m-d');
	}


	public function user()
	{
			return $this->belongsTo('App\User');
	}

	public function tags()
	{
			return $this->belongsToMany('App\Tag','article_tag','article_id')->withTimeStamps();
	}

	public function getTagListAttribute()
	{
			return $this->tags->Lists('id');
	}

}
