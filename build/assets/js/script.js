(function () {

    function displayCardType() {
        // Get credit card value and strip all non-numerical characters
        var cardNum = document.getElementById('card-num').value.replace(/\D/g,'');

        // Save all of the icons into variables
        var amex = document.getElementById('amex'),
            visa = document.getElementById('visa'),
            discover = document.getElementById('discover'),
            mastercard = document.getElementById('mastercard'),
            securityIcon = document.getElementById('security-icon');

        // Reset position values
        amex.nextSibling.style.backgroundPosition = '0 -42px';
        visa.nextSibling.style.backgroundPosition = '-48px -42px';
        discover.nextSibling.style.backgroundPosition = '-96px -42px';
        mastercard.nextSibling.style.backgroundPosition = '-144px -42px';
        securityIcon.style.backgroundPosition = '-80px -84px';

        // Check input against card requirements
        if (/^3[47]/.test(cardNum)) { // American Express start with 34 or 37 and have 15 digits

            amex.nextSibling.style.backgroundPosition = '0 0';
            securityIcon.style.cssText = 'background-position: 0 -84px; width: 70px; height: 33px;';

        } else if (/^4/.test(cardNum)) { // Visa card numbers start with a 4

            visa.nextSibling.style.backgroundPosition = '-48px 0';

        } else if (/^6/.test(cardNum)) { // Discover start with 6011 or 65. All have 16 digits

            discover.nextSibling.style.backgroundPosition = '-96px 0';

        } else if (/^5[1-5]/.test(cardNum)) { // MasterCard start with 51 through 55 and have 16 digits

            mastercard.nextSibling.style.backgroundPosition = '-144px 0';

        }

    }

    // get the input from the card-num field every time someone presses a key
    document.getElementById('card-num').addEventListener('keyup', displayCardType);

})();

Modernizr.load(
    {
        test : Modernizr.input.required,
        nope : ['http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js', '/AUX-Challenge-Forms/build/assets/js/validate.js']
    }
);