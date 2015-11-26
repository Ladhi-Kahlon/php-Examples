<!doctype HTML>
<html>
    <head>
        <title>send email using php</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
    
    <body>
        
        <?php
        
            $emailTo="";
            $subject="email using php";
            $body="body content for the email sending using php";
            $headers="From: Kahlon@comcast.net";
        
            #mail($emailTo, $subject, $body, $headers); //this will send the email w/o any notification
        
            #code will provide notification if the mail was send or not
            if (mail($emailTo, $subject, $body, $headers)) { //mail returns 1 on sucess, if code returns a value
                
                echo "mail sent";
                
            } else {
                
                echo "mail not sent";
            }
        
        
        ?>
    
    </body>


</html>