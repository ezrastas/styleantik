;(function($){
	$.fn.ajaxsendmail = function(){
        var form = $(this),
		value   = form.serializeArray(),
        request = {
            'option' : 'com_ajax',
            'module' : 'tm_ajax_contact_form',
            'data'   : value,
            'format' : 'raw'
        };
		$.ajax({
            type   : 'POST',
            data   : request,
            beforeSend: function(){
                form.find("div[id*=message]")
                .addClass("l")
                .removeClass("e")
                .removeClass("c")
                .removeClass("s")
            },
            success: function (response){
                switch(response) {
                    case 's':
                        form.find("div[id*=message]")
                        .removeClass("l")
                        .removeClass("e")
                        .removeClass("c")
                        .addClass("s")
                        .delay(2000)
                        .queue(function(n){
                            $(this)
                            .removeClass("s");
                            n();
                        });
                        form.trigger('reset');
                        if (!$.support.placeholder) {
                            form.find('*[placeholder]').each(function(n){
                                $(this)
                                .parent()
                                .find('>.form_placeholder')
                                .show();
                            })
                        }
                        break;
                    default:
                        form.find("div[id*=message]")
                        .removeClass("l")
                        .removeClass("s")
                        .removeClass("c")
                        .addClass("e")
                        .find('span.e')
                        .append(response)
                        .delay(2000)
                        .queue(function(n){
                            form.find("div[id*=message]")
                            .removeClass("e")
                            .find('span.e span')
                            .remove();
                            n();
                        });
                        break;
                }
            }
        });
	}
})(jQuery);