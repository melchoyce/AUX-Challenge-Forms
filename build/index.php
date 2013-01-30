<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AUX Forms Challenge</title>
    
    <!-- CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
</head>

<body>

    <?php
        // if the form has been submitted, process it - otherwise, just display the form normally
        if(isset($_POST['send'])){
            
            // pull the name out of the submitted for
            $name = strip_tags($_POST['name']);
            
            // pull the email out of the submitted form
            $emailFrom = strip_tags($_POST['email']);
            
            // who you're sending the email to (probably change this)
            $emailTo = "mel.choyce@freshtilledsoil.com";
            $subject = "Form Challenge";
            
            // inset information into the body of the email
            $body = "Name: ".$name."\n";
            $body .= "Email: ".$emailFrom."\n";
            
            // set the email headers
            $headers = "From: ".$emailFrom."\n";
            $headers .= "Reply-To:".$emailFrom."\n";	
            
            $success = mail($emailTo, $subject, $body, $headers);
            
            // this is the message that gets displayed after submission
            if ($success){
                echo 'sent';
            } else {
                echo 'not sent';
            }
        
        } else {
    ?>
        
        <div id="container">
            <header role="banner">
                <hgroup>
                    <h1>Sign up for Whoo!</h1>
                    <h2>50 projects, 500 images, 10 videos, domain building, and technical support.</h2>
                </hgroup>
            </header>
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="main">
                
                <ol>
                    <li>
                        <h3 id="portfolio-details-header">First, name your portfolio</h3>
                        <fieldset class="form-step-container" name="portfolio-details" aria-labelledby="portfolio-details-header">
                            <label for="portfolio-title">Portfolio Title</label>
                            <input type="text" id="portfolio-title" name="portfolio-title" pattern="[a-zA-Z]+" aria-required="true" required />
                            
                            <div id="url">
                                <label for="portfolio-addr">Portfolio Address</label>
                                <input type="text" id="sample-url" name="sample-url" value=".sample.com" disabled />
                                <input type="text" id="portfolio-addr" name="portfolio-addr" pattern="[a-zA-Z]+" aria-required="true" required />
                            </div>
                        </fieldset>
                    </li>
                    <li>
                        <h3 id="acct-details-header">Now, enter your account details</h3>
                        <fieldset class="form-step-container" name="acct-details" aria-labelledby="acct-details-header">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" pattern="[a-zA-Z]+" aria-required="true" required />
                            
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" aria-describedby="email-description" aria-required="true" required />
                            <span id="email-description">NOTE: We'll never share your email, promise.</span>
                            
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" data-typetoggle="#show-password" aria-required="true" required />
                        </fieldset>
                    </li>
                    <li>
                        <h3 id="payment-info-header">Finally, enter your payment information <a href="#" title="pay using paypal">Use PayPal</a></h3>
                        <fieldset class="form-step-container" name="payment-info" aria-labelledby="payment-info-header">
                            <div id="credit-card">
                                <div id="card-num">
                                    <label for="card-num">Card Number</label>
                                    <input type="text" name="card-num" pattern="[0-9]{13,16}" aria-required="true" autocomplete="off" required />
                                </div>
                                <fieldset>
                                    <legend>Select your credit card</legend>
                                    <ul class="card-list">
                                        <li class="amex">
                                            <input type="radio" name="card-icon" id="amex" />
                                            <label for="amex">American Express</label>
                                            
                                        </li>
                                        <li class="visa">
                                            <input type="radio" name="card-icon" id="visa" />
                                            <label for="visa">Visa</label>
                                        </li> 
                                        <li class="discover">
                                            <input type="radio" name="card-icon" id="discover" />
                                            <label for="discover">Discover</label>
                                        </li>
                                        <li class="mastercard">
                                            <input type="radio" name="card-icon" id="mastercard" />
                                            <label for="mastercard">Mastercard</label>
                                        </li>
                                    </ul>
                                </fieldset>
                            </div>
                            
                            <div id="security">
                                <label for="security-code">Security Code</label>
                                <input type="text" id="security-code" name="security-code" maxlength="4" pattern="[0-9]{3,4}" aria-required="true" autocomplete="off" required />
                                <div id="security-icon"></div>
                            </div>
                            
                            <label for="month">Expiration Date</label>
                            <select name="month" id="month" aria-required="true">
                                <option value="00" disabled selected>Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <select name="year" id="year" aria-required="true">
                                <option value="00" disabled selected>Year</option>
                                <option value="01">2013</option>
                                <option value="02">2014</option>
                                <option value="03">2015</option>
                                <option value="04">2016</option>
                                <option value="05">2017</option>
                                <option value="06">2018</option>
                            </select>
                        </fieldset>
                    </li>                    
                </ol>
                
                <button type="submit" name="create-portfolio">Create your portfolio</button>
                
            </form>
        </div>
    
    <?php
        }
    ?>

    <!-- JS -->
    <script src="assets/js/lib/jquery.js" type="text/javascript"></script>
    <script src="assets/js/lib/jquery.validate.js" type="text/javascript"></script>
    <script src="assets/js/lib/modernizr.js" type="text/javascript"></script>
    <script type="text/javascript">
        $('#text').showPassword();
    </script>
    
</body>
</html>
