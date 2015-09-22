<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class News extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];
    protected $table = 'news';
    protected $fillable = ['title','slug','pin', 'thumbnail', 'text', 'short_text', 'gallery_id'];

    public function gallery() {
    	return $this->belongsTo('App\Gallery');
    }

    public function getThumbnailCuratedAttribute() {
        return str_replace('uploads/', '', $this->thumbnail);
    }

    public function getUrlAttribute() {
    	$slug = str_slug($this->title);
    	return "/news/{$this->slug}";
    }
}
