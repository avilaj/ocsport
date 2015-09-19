<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Traits\OrderableModel;

class Category extends Model
{
    use OrderableModel;
    protected $table = 'categories';
    protected $fillable = ['name', 'order', 'gallery_id', 'product_id'];
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
}
