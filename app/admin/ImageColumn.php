<?php
class ImageColumn extends SleepingOwl\Admin\Columns\Column\Image {
	/**
	 * @return View
	 */
	public function render()
	{
		$value = $this->getValue($this->instance, $this->name());
		$value = "{$value}";
		if ( ! empty($value) && (strpos($value, '://') === false))
		{
			$value = asset($value);
		}
		$params = [
			'value'  => $value,
			'append' => $this->append(),
		];
		return view(AdminTemplate::view('column.image'), $params);
	}
}