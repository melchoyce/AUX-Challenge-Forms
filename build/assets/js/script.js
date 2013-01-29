/* Function to figure out what kind of credit card a user is entering */

function getCreditCardType(accountNumber) {

  //start without knowing the credit card type
  var result = "unknown";

  if (/^5[1-5]/.test(accountNumber)) { // Check for mastercard
  
    result = "mastercard";
  
  } else if (/^4/.test(accountNumber)) { // Check for visa
 
    result = "visa";
  
  } else if (/^3[47]/.test(accountNumber)) { // Check for amex
  
    result = "amex";
  
  } else if (/^6011-?/.text(accountNumber)) {

    result="discover";

  }

  return result;

}
