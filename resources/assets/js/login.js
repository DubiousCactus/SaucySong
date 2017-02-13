$(document).ready(function(){
	var formInputs = $('input[name="email"],input[name="password"],input[name="name"],input[name="passwordConfirm"]');
	formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
	});
	formInputs.focusout(function() {
		if ($.trim($(this).val()).length == 0){
		$(this).parent().children('p.formLabel').removeClass('formTop');
		}
		$('div#formWrapper').removeClass('darken-bg');
		$('div.logo').removeClass('logo-active');
	});
	$('p.formLabel').click(function(){
		 $(this).parent().children('.form-style').focus();
	});
	$('#register').click(function () {
		$('#name-field, #passwordConfirm-field').animate({
			'margin-top': "+=64px",
			'opacity': 1,
			'z-index': 0},
			1000, function() {
				$('.btn-social').fadeOut('slow', function() {
					$('.login').fadeOut(function() {
						$('.login').val('Register').fadeIn();
					});
				});
				$('#name-field, #passwordConfirm-field').toggleClass('register-hidden');
		});
	});
});

