


$(document).ready( function() {
	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	});


	$('#deleteuser').click(function(e) {
		e.preventDefault();
		var msg = 'Are you sure?';
		bootbox.confirm(msg, function(result) {
			if (result) {
				$('#deleteuser').submit();
			}
		});
	});



	$('#deleteproduct').click(function(e) {
		e.preventDefault();
		var msg = 'Are you sure?';
		bootbox.confirm(msg, function(result) {
			if (result) {
				$('#deleteproduct').submit();
			}
		});
	});

	$('#deletecategory').click(function(e) {
		e.preventDefault();
		var msg = 'Are you sure?';
		bootbox.confirm(msg, function(result) {
			if (result) {
				$('#deletecategory').submit();
			}
		});
	});

	$('#deletesourcepartner').click(function(e) {
		e.preventDefault();
		var msg = 'Are you sure?';
		bootbox.confirm(msg, function(result) {
			if (result) {
				$('#deletesourcepartner').submit();
			}
		});
	});

		$('#deleteblog').click(function(e) {
		e.preventDefault();
		var msg = 'Are you sure?';
		bootbox.confirm(msg, function(result) {
			if (result) {
				$('#deleteblog').submit();
			}
		});
	});


});




$(document).ready( function() {
	$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
		
		var input = $(this).parents('.input-group').find(':text'),
		log = numFiles > 1 ? numFiles + ' files selected' : label;
		
		if( input.length ) {
			input.val(log);
		} else {
			if( log ) alert(log);
		}
		
	});
});

