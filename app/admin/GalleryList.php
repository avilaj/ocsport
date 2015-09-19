<?php 
use SleepingOwl\Admin\FormItems\Image;
use SleepingOwl\Admin\AssetManager\AssetManager;

class GalleryList extends Image
{

	public function initialize()
	{
		AssetManager::addScript('/javascripts/formItems/GalleryList.js');
		AssetManager::addScript('admin::default/js/formitems/image/flow.min.js');
		AssetManager::addScript('admin::default/js/formitems/image/Sortable.min.js');
		AssetManager::addScript('admin::default/js/formitems/image/sortable.jquery.binding.js');
		AssetManager::addStyle('admin::default/css/formitems/image/images.css');
	}

	public function render () {
		$params = $this->getParams();
		// $tipo = typeof $params;
		// $values = [];
		// return var_dump($values);
		// return var_dump($params['value']);
		// $params['value'] = ;
		return view('form.gallerylist', $params)->render();
	}

	public function save()
	{
		// $name = $this->name();s
		// $value = Input::get($name, '');
		// throw new Exception(var_dump($value), 1);
		
		// if ( ! empty($value))
		// {
		// 	$value = explode(',', $value);
		// } else
		// {
		// 	$value = [];
		// }
		// Input::merge([$name => $value]);
		parent::save();
	}

	public function value()
	{
		$value = parent::value();
		if (is_null($value))
		{
			$value = [];
		}
		if (is_string($value))
		{
			$value = json_decode($value);
		}
		return $value;
	}

}