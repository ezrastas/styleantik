if (typeof Virtuemart === "undefined")
    Virtuemart = {};
jQuery(function($) {
    Virtuemart.customUpdateVirtueMartCartModule = function(el, options){
        var base    = this;
        var $this   = $(this);
        base.$el    = $(".vmCartModule_ajax");

        base.options    = $.extend({}, Virtuemart.customUpdateVirtueMartCartModule.defaults, options);
            
        base.init = function(){
            $.ajaxSetup({ cache: false })
            $.getJSON(window.vmSiteurl + "index.php?option=com_virtuemart&nosef=1&view=cart&task=viewJS&format=json" + window.vmLang,
                function (datas, textStatus) {
                 if(datas.billTotal.match(/<strong>(.*)<\/strong>/)[1]) datas.billTotal = datas.billTotal.match(/<strong>(.*)<\/strong>/)[1];
                    $this.find(".vm_cart_products").html("");
                    $this.find(".show_cart").html("");
                    $this.find(".total").html("");
                    base.$el.each(function( index ,  module ) {
                        if (datas.totalProduct > 0) {
                            i = 0;
                            $this.find("#vm_cart_products").removeClass('empty');
                            $this.find(".vm_cart_products").html("");
                            $.each(datas.products, function (key, val) {
                                //jQuery("#hiddencontainer .vmcontainer").clone().appendTo(".vmcontainer .vm_cart_products");
                                $this.find(".hiddencontainer .vmcontainer").clone().appendTo( $this.find(".vm_cart_products") );
                             $this.find(".product_row:last").find('.remove_product a').attr('data-productid', key);
                                $.each(val, function (key, val) {
                                    $this.find(".vm_cart_products ." + key).last().html(val);
                                });
                            });
                             $this.find(".show_cart").html(datas.cart_show);
                            $this.find(".show_cart a").removeAttr('style').addClass('btn');
                            $this.find(".total").html(datas.billTotal);
                            $this.find(".total_products a").removeClass('disabled').find('.total_price').html(datas.billTotal);
                            $this.find(".total_products a").find('.total_items').html(datas.totalProduct);
                        }
                         else{
                            $this.find("#vm_cart_products").addClass('empty');
                            $this.find(".total_products a").addClass('disabled').find('.total_price').html(datas.billTotal);
                            $this.find(".total_products a").find('.total_items').html(datas.totalProduct);
                        }
                    });
                }
            );          
        };
        base.init();
    };
    // Definition Of Defaults
    Virtuemart.customUpdateVirtueMartCartModule.defaults = {
        name1: 'value1'
    };

});

jQuery(document).ready(function( $ ) {
    jQuery(document).off("updateVirtueMartCartModule","body",Virtuemart.customUpdateVirtueMartCartModule);
    jQuery(document).on("updateVirtueMartCartModule","body",Virtuemart.customUpdateVirtueMartCartModule);
});
