<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AUX Forms Challenge</title>
    
    <!-- CSS -->
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    
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
            $emailTo = "apprentices@freshtilledsoil.com";
            $subject = "Submission";
            
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
                <h1>Sign up for Whoo!</h1>
                <h2>50 projects, 500 images, 10 videos, domain building, and technical support.</h2>
            </header>
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                
                <ol>
                    <li>
                        <h3>First, name your portfolio</h3>
                        <fieldset name="portfolio-details">
                            <label for="portfolio-title">Portfolio Title</label>
                            <input type="text" id="portfolio-title" name="portfolio-title" />
                            
                            <label for="portfolio-addr">Portfolio Address</label>
                            <input type="text" id="portfolio-addr" name="portfolio-addr" pattern="[A-Za-z]" />
                        </fieldset>
                    </li>
                    <li>
                        <h3>Now, enter your account details</h3>
                        <fieldset name="acct-details">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" />
                            
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" aria-describedby="email-description" />
                            <div id="email-description">NOTE: We'll never share your email, promise.</div>
                            
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" data-typetoggle='#checkbox' />
                            <input id="checkbox" type="checkbox" /><label>Show password</label>
                        </fieldset>
                    </li>
                    <li>
                        <h3>Finally, enter your payment information</h3>
                        <fieldset name="payment-info">
                            <label for="card-num">Card Number</label>
                            <input type="text" id="name" name="name" />
                            
                            <label for="security-code">Security Code</label>
                            <input type="email" id="email" name="email" />
                            
                            <label for="month">Expiration Date</label>
                            <select name="month" id="month">
                                <option value="00" disabled>Month</option>
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
                            <select name="month" id="month">
                                <option value="00" disabled>Year</option>
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
                    
                <!--    
                <label for="name">Name</label>
                <input type="text" id="name" name="name" minlength="2"/>
                
                <label for="name">E-mail</label>
                <input type="email" id="email" name="email" minlength="2"/>
                
                <button type="submit" name="send">Send!</button>
                -->
                
            </form>
        </div>
    
    <?php
        }
    ?>

    <!-- JS -->
    <script src="assets/js/lib/jquery.js" type="text/javascript"></script>
    <script src="assets/js/lib/jquery.showpassword.js" type="text/javascript"></script>
    <script src="assets/js/lib/jquery.validate.js" type="text/javascript"></script>
    <script src="assets/js/lib/modernizr.js" type="text/javascript"></script>
    <script type="text/javascript">
        $('#text').showPassword();
    </script>
    
</body>
</html>
