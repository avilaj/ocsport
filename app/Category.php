<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Traits\OrderableModel;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Category extends Model implements SluggableInterface
{
    use OrderableModel;
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $table = 'categories';
    protected $fillable = ['name', 'banner','order', 'slug','gallery_id', 'product_id'];
    public $timestamps = false;

    public function scopeDefaultSort($query) {
    	return $query->orderBy('order', 'asc');
    }
    public function getOrderField() {
    	return 'order';
    }

    public function gallery () {
        return $this->belongsTo('App\Gallery');
    }

    public function bestSeller () {
        return $this->belongsTo('App\Product');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }
    public function getUrlAttribute () {
        $slug = str_slug($this->name);
        $url = "/catalogo/{$this->getSlug()}";
        return $url;
    }
}
