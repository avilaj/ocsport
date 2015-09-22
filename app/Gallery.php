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
			$images = json_decode($value);
		} catch (Exception $e) {
			$images = [];
		}

		if (! is_array($images)) {
			$images =[];
		}

        return $images;

	}

	public function setImagesAttribute($photos)
	{
        $cadena = json_encode($photos);
	    $this->attributes['images'] = $cadena;
	}

	public function getImagesCuratedAttribute() {
		$result = array();
		foreach($this->images as $image) {
			$image->src = $cadena = str_replace('uploads/', '', $image->src);;
			$result[] = $image;
		}
		return $result;
	}

}
