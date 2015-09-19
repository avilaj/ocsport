<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = ['name', 'hex'];
    public $timestamps = false;
    public function products() {
    	return $this->belongsToMany('App\Product', 'product_colors');
    }
}
