$(document).ready(function(){
    $("#whoo-form").validate({
        onkeyup: false,
        messages: {
            "portfolio-title": "Please enter a name for your portfolio",
            "portfolio-addr": "Please enter the address you would like to use for your portfolio<br /><em>(it will be displayed as [address].sample.com)</em>",
            "name": "Please enter your full name",
            "email": "Please enter a valid email address",
            "password": "Please create a password",
            "card-num": "Please enter a valid card number",
            "security-code": "Please enter the security code located on your card"
        },
        errorPlacement: function(error, element) {
            if(element.attr("name") == "email") {

                error.insertAfter( $("#email-description") );

            } else if(element.attr("name") == "card-num") {

                error.insertAfter( $("#credit-card") );

            } else if (element.attr("name") == "security-code") {

                error.insertAfter( $("#security") );

            } else {

                // the default error placement for the rest
                error.insertAfter(element);

            }
        }
    });
});