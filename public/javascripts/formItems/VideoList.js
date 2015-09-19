$(function ()
{
	$('.videoList').each(function (index, item)
	{
		var $item = $(item);
		var $group = $item.closest('.form-group');
		var $innerGroup = $item.find('.form-group');
		var $errors = $item.find('.errors');
		var $input = $item.find('.listValue');

		var updateValue = function ()
		{
			var values = [];
			$item.find('a[data-value]').each(function ()
			{
				values.push($(this).data('value'));
			});
			$input.val(values.join(','));
		};
		var urlItem = function (url) {
			var a = '';
			a += '<div class="col-xs-6 col-md-3">';
				a += '<div class="item">';
					a += '<a data-value="'+url+'" href="'+url+'">';
					a += url;
					a += '</a> ';
					a += '<a href="#" class="videoRemove">&times;</a>';
				a += '</div>';
			a += '</div>';
			return a;
		};
		$('.videoAdd').click(function (e) {
			var value = window.prompt('URL:');
			if (value.length) {
				$innerGroup.append(urlItem(value));
				updateValue();
			}
		});

		// flow.on('fileSuccess', function(file,message){
		// 	flow.removeFile(file);

		// 	$errors.html('');
		// 	$group.removeClass('has-error');

		// 	var result = $.parseJSON(message);

		// 	$innerGroup.append('<div class="col-xs-6 col-md-3 imageThumbnail"><div class="thumbnail">' +
		// 		'<img data-value="' + result.value + '" src="' + result.url + '" />' +
		// 		'<a href="#" class="imageRemove">Remove</a></div></div>');
		// 	updateValue();
		// });
		// flow.on('fileError', function(file, message){
		// 	flow.removeFile(file);

		// 	var response = $.parseJSON(message);
		// 	var errors = '';
		// 	$.each(response, function (index, error)
		// 	{
		// 		errors += '<p class="help-block">' + error + '</p>'
		// 	});
		// 	$errors.html(errors);
		// 	$group.addClass('has-error');
		// });
		$item.on('click', '.videoRemove', function (e)
		{
			e.preventDefault();
			$(this).closest('.item').remove();
			updateValue();
		});

		$innerGroup.sortable({
			onUpdate: function ()
			{
				updateValue();
			}
		});

	});
});