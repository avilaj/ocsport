<?php

use SleepingOwl\Admin\FormItems\NamedFormItem;
use SleepingOwl\Admin\AssetManager\AssetManager;

class JsonField extends NamedFormItem
{

	public function initialize()
	{
		AssetManager::addScript('/javascripts/formItems/JsonField.js');
		AssetManager::addScript('admin::default/js/formitems/image/Sortable.min.js');
		AssetManager::addScript('admin::default/js/formitems/image/sortable.jquery.binding.js');
		// AssetManager::addStyle('admin::default/css/formitems/image/images.css');
	}

	public function render () {
		$params = $this->getParams();
		return view('form.jsonfield', $params)->render();
	}
	public function save()
	{
		$name = $this->name();
		$value = Input::get($name, '');
		Input::merge([$name => $value]);
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