<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['title', 'subtitle', 'description', 'tag', 'images', 'videos'];
    public function scopeTag($query, $value) {
    	return $query->where('tag', $value)->first();
    }

	public function getVideosAttribute($value)
	{
	    return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
	}

	public function setVideosAttribute($photos)
	{
	    $this->attributes['videos'] = implode(',', $photos);
	}

	public function getImagesAttribute($value)
	{
		try {
			$json = json_decode($value);
		} catch (Exception $e) {
			$json = [];
		}
		return $json;
	}

	public function setImagesAttribute($photos)
	{
		var_dump($photos);
	    $this->attributes['images'] = json_encode($photos);
	}

}
