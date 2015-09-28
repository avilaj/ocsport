<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
	<label for="{{ $name }}">{{ $label }}</label>
	<input type="color" name="{{ $name }}" value="{{ $value }}" class="form-control">
	<div class="errors">
		@include(AdminTemplate::view('formitem.errors'))
	</div>
</div>