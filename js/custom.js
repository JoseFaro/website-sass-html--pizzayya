(function ($) {
    var width = $(window).width();
    var SIZE_MD = 767.98;
    
    function processPizzaMenuItems() {
        var items = $(".menu-description");
        var maxHeight = 0;

        items.css('height', '');

        if (width > 767) {
            items.each(function(){
                var itemHeight = $(this).height();
    
                if ((itemHeight > maxHeight)) {
                    maxHeight = itemHeight;
                }
            });
    
            items.css('height', maxHeight + 'px');
        }
        // var contactForm = $("#contact-form");

        // if (contactForm.length > 0){
        //     var sendingContactForm = false;

        //     contactForm.submit(function(e){
        //         e.preventDefault();
        //         var form = $(this);

        //         if (!sendingContactForm){
        //             var action = 'https://polariswebsites.com/sendEmail.php';
        //             var req = $(this).serializeArray();

        //             sendingContactForm = true;

        //             $.post(action, req, function(data){
        //                 if (data.success){
        //                     contactForm.find('.contact-done').fadeIn();
        //                     contactForm.find('.contact-error').fadeOut();
        //                 } else {
        //                     contactForm.find('.contact-done').fadeOut();
        //                     contactForm.find('.contact-error').fadeIn();
        //                 }

        //                 sendingContactForm = false;
        //                 form.trigger("reset");
        //             },'json');
        //         }

        //         return false;
        //     });

        //     initContactFormActivator('#form-activator', contactForm);
        // }
    }

    // function initContactFormActivator(elemId, formWrapper) {
        // setTimeout(function() {
        //     var formActivator = formWrapper.find(elemId);

        //     if (formActivator) {
        //         var formActivatorCaptcha = formActivator.data('captcha');
        //         var formActivatorCaptchaName = formActivator.data('captcha-name')
    
        //         formActivator.append($('<input type="hidden" value="' + formActivatorCaptcha + '" name="' + formActivatorCaptchaName + '" />'));
        //     }
        // }, 2000);
    // }
    

    $(document).ready(function() {
        width = $(window).width();
        processPizzaMenuItems();
    });

    $(window).resize(function() {
        width = $(window).width();
        processPizzaMenuItems();
    });
})(jQuery);