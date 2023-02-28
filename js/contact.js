$(document).ready(function(){ 
	"use strict";

    $('#contact_submit').on("click",function(e) { 
		e.preventDefault();
		var name = $('input#name').val();
		var email = $('input#email').val();
		var message = $('textarea#message').val();
		var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
		var subject = $('input#subject').val();
		var siteemail = $('input#siteemail').val();
		var hasError = false;
		if(name=='')
		{
			$('[name="name"]').addClass('vaidate_error');
			hasError = true;
		}else{
			$('[name="name"]').removeClass('vaidate_error');
		}

		if(email=='')
		{
			$('[name="email"]').addClass('vaidate_error');
			hasError = true;
		}else{
			if (!pattern.test(email)) {
				$('[name="email"]').addClass('vaidate_error');
				hasError = true;
			}else{
				$('[name="email"]').removeClass('vaidate_error');
			}
		}
		if(message=="")
		{
			$('[name="message"]').addClass('vaidate_error');
			hasError = true;
		}else{
			$('[name="message"]').removeClass('vaidate_error');
		}
		if(subject=="")
		{
			$('[name="subject"]').addClass('vaidate_error');
			hasError = true;
		}else{
			$('[name="subject"]').removeClass('vaidate_error');
		}
		if(hasError) { return; }
		else {		
			$.ajax({
				type: 'post',
				url: 'sendEmail.php',
				data: 'name=' + name + '&email=' + email +'&subject='+ subject +'&message=' + message,
				success: function(results) {	
					$('div#contact_response').html(results).css('display', 'block');		   
				}
			});
		}
	});
});