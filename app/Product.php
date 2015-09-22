<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class Product extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

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
        $images = preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
        if (! is_array($images) )  $images =[];
        return $images;
	}

	public function setImagesAttribute($images)
	{
        $cadena = implode(',', $images);
	    $this->attributes['images'] = $cadena;
	}
    public function getImagesCuratedAttribute() {
        $result = array();
        foreach($this->images as $image) {
            $result[] = str_replace('uploads/', '', $image);
        }
        return $result;
    }
    public function getThumbnailCuratedAttribute() {
        return str_replace('uploads/', '', $this->thumbnail);
    }
    public function getUrlAttribute() {
        $url = "/catalogo/{$this->category->slug}/{$this->slug}";
        return $url;
    }

    public function setColorsAttribute($colors) {
        $this->colors()->detach();
        if (! $colors) return;
        if (! $this->exists) $this->save();
        $this->colors()->attach($colors);
    }

}
