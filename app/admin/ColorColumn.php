<?php
// namespace SleepingOwl\Admin\Columns\Column;
// use Illuminate\View\View;
use SleepingOwl\Admin\Columns\Column\NamedColumn;
use SleepingOwl\Admin\AssetManager\AssetManager;

class ColorColumn extends NamedColumn
{

	/**
	 * Initialize column
	 */
	// public function initialize()
	// {
	// 	parent::initialize();

	// 	AssetManager::addStyle('admin::default/css/ekko-lightbox.min.css');
	// 	AssetManager::addScript('admin::default/js/ekko-lightbox.min.js');
	// 	AssetManager::addScript('admin::default/js/columns/image.js');
	// }

	/**
	 * @param $name
	 */
	function __construct($name)
	{
		parent::__construct($name);

		$this->orderable(false);
	}

	/**
	 * @return View
	 */
	public function render()
	{
		$value = $this->getValue($this->instance, $this->name());
		// if ( ! empty($value) && (strpos($value, '://') === false))
		// {
		// 	$value = asset($value);
		// }
		$params = [
			'value'  => $value,
			'append' => $this->append(),
		];
		return view('form.colorcolumn', $params);
	}

}