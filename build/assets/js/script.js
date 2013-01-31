// Find out what numbers people have entered
// Change the background position of the card that matches those numbers
// Bind this to a keyup event



/* Function to figure out what kind of credit card a user is entering */

function getCreditCardType(accountNumber) {

  //start without knowing the credit card type
  var result = "unknown";

  if (/^5[1-5]/.test(accountNumber)) { // Check for mastercard
  
    result = "mastercard";
    // document.getElementById("#card-icons").className = "mastercard";

  } else if (/^4/.test(accountNumber)) { // Check for visa
 
    result = "visa";
    // document.getElementById("#card-icons").className = "visa";
  
  } else if (/^3[47]/.test(accountNumber)) { // Check for amex
  
    result = "amex";
    // document.getElementById("#card-icons").className = "amex";
  
  } else if (/^6/.text(accountNumber)) { // Check for discover

    result="discover";
    // document.getElementById("#card-icons").className = "discover";

  }

  return result;

}

function handleEvent(event)
{
  var value   = event.target.value,
      type    = getCreditCardType(value);

  switch (type)
  {
    case "mastercard":
        //show MasterCard icon
        document.getElementById("#card-icons").className = "mastercard";
        break;

    case "visa":
        //show Visa icon
        document.getElementById("#card-icons").className = "visa";
        break;

    case "amex":
        //show American Express icon
        document.getElementById("#card-icons").className = "amex";
        break;

    case "discover":
        document.getElementById("#card-icons").className = "discover";
        break;

    default:
        //clear all icons?
        //show error?
  }
}

// or window.onload
document.addEventListener("DOMContentLoaded", function(){
  var textbox = document.getElementById("card-num");
  textbox.addEventListener("keyup", handleEvent, false);
  textbox.addEventListener("blur", handleEvent, false);
}, false);