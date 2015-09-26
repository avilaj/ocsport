<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Configuration extends Model
{
    //
    protected $table = 'configuration';
    protected $fillable = ['key', 'value', 'owner', 'type'];
    public function __construct() {
    	$conf = DB::table('configuration')->get();
    	for ($i=0; $i < count($conf); $i++) { 
    		# code...
    		$item = $conf[$i];
    		$this->attributes[$item->key] = $item->value;
    	}
    }
    public function find($id) {
    	// return $this->attributes
    }
    public function scopeHome($query) {
    	return $query->where('type', 'home_page');
    }
    public function scopeKey($query, $key) {
    	return $query->where('key', $key);
    }
    public function setHomeOcteamAtrribute($string) {
    	$this->where('key', 'home_octeam')->update(['val'=>$string]);
    	return true;
    }
    public function getOcteamAttribute() {
    	$res = DB::table('configuration')->where('key', 'home_octeam')->first();
    	return $this->where('key', 'home_octeam')->first();
    }
    public function save(array $options = [])
    {
        if ($this->fireModelEvent('saving') === false) {
            return false;
        }
        foreach ($this->attributes as $key => $value) {
        	# code...
        	DB::table('configuration')
        		->where('key', $key)
        		->update(['value' => $value]);
        }
    	return true;
    	// throw new Exception(var_dump($this), 1);
    }
    // public function __set($key, $val) {
    // 	// $this->attributes[$key] = $val;
    // }
}
