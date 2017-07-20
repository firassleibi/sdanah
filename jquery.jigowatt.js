jQuery(document).ready(function(){

	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(750,function() {
		$('#message').hide();

 		$('#submit')
			.after('<img src="images/ajax-loader.gif" class="loader1" />')
			.attr('disabled','disabled');

		$.post(action, {
			type: $('#type').val(),
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			ctype: $('#ctype').val(),
			city: $('#city').val(),
			comments: $('#comments').val(),
			verify: $('#verify').val()
			
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});
	$('#contactform2').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(750,function() {
		$('#message').hide();

 		$('#submit')
			.after('<img src="images/ajax-loader.gif" class="loader1" />')
			.attr('disabled','disabled');

		$.post(action, {
			ptype: $('#ptype').val(),
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			ltype: $('#ltype').val()
			
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform2 img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform2').slideUp('slow');

			}
		);

		});

		return false;

	});
	

});