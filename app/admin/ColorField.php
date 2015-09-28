<?php

use SleepingOwl\Admin\FormItems\NamedFormItem;
use SleepingOwl\Admin\AssetManager\AssetManager;

class ColorField extends NamedFormItem
{

	public function initialize()
	{
		AssetManager::addScript('/packages/panel/spectrum/spectrum.js');
		AssetManager::addStyle('/packages/panel/spectrum/spectrum.css');
	}

	public function render () {
		$params = $this->getParams();
		return view('form.colorfield', $params)->render();
	}
}