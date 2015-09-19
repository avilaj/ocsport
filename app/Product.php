<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['title', 'subtitle', 'thumbnail', 'description', 'specs', 'details', 'images', 'tags', 'price', 'link', 'category_id', 'product_id'];
    
    public function colors() {
    	return $this->belongsToMany('App\Color', 'product_colors');
    }

    public function category() {
    	return $this->belongsTo('App\Category');
    }

    public function parent() {
    	return $this->belongsTo('App\Product');
    }

	public function getImagesAttribute($value)
	{
	    return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
	}

	public function setImagesAttribute($images)
	{
	    $this->attributes['images'] = implode(',', $images);
	}
}
