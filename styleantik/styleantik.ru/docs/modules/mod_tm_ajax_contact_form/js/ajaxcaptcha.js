;(function($){
	$.fn.ajaxcaptcha = function(){
    	var form = $(this);
    	value   = form.serializeArray(),
        len = value.length,
        dataObj = {};
        for (i=0; i<len; i++) {
          dataObj[value[i].name] = value[i].value;
        }
        var request = {
            'option' : 'com_ajax',
            'module' : 'tm_ajax_contact_form',
            'g-recaptcha-response' : dataObj['g-recaptcha-response'] ? dataObj['g-recaptcha-response'] : '',
            'recaptcha_challenge_field' : dataObj['recaptcha_challenge_field'] ? dataObj['recaptcha_challenge_field'] : '',
            'recaptcha_response_field' : dataObj['recaptcha_response_field'] ? dataObj['recaptcha_response_field'] : '',
            'format' : 'raw',
            'method' : 'recaptcha'
        };
        $.ajax({
            type   : 'POST',
            data   : request,
            beforeSend: function(){
                form.find("div[id*=message]")
                .addClass("l")
                .removeClass("e")
                .removeClass("c")
                .removeClass("s");
            },
            success: function(response){
				switch(response) {
                    case 's':
                        $(form).ajaxsendmail();
                        break;
                    default:
                        form.find("div[id*=message]")
                        .removeClass("l")
                        .removeClass("s")
                        .removeClass("e")
                        .addClass("c")
                        .delay(2000)
                        .queue(function(n){
                            form.find("div[id*=message]")
                            .removeClass("c")
                            n();
                        });
                        break;
                }
                grecaptcha.reset();
			}
        });
	}
})(jQuery);