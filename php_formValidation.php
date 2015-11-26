<?php

    if($_POST['submit']){
        
        if(!$_POST['name']) {
            $error='<br />Name is missing';
        }
        
        if(!$_POST['email']) {
            $error.="<br />E-mail address is missing";
        }
        
        //$_POST['email] != '' will check email variable is null or not
        // AND !filter_var...  will check if email add is valid
        if ($_POST['email']="" and !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {      
            $error.+"<br />Invalid E-mail address";
        }
        
        if($error) {
            $result='<div class="alert alert-danger"><strong>There were error(s) in your form:                                 </strong>'.$error.'</div>';
            
        } else {
            
            //$result='<div class="alert alert-success">Thank You!</div>';
            
            if(mail("Kahlon@comcast.net", "Comment from Website", "Name: ".$_POST['name']."Email:  ".$_POST['email']."Comment: ".$_POST['comment'])) {
                
                $result='<div class="alert alert-success">Thank You!</div>';
         
            } else {
                
                $result='<div class="alert alert-danger">Error on sending e-mail. Please try again.</div>';
                
            }
            
            
        }
        
    }

?>

<!doctype HTML>
<html>
    <head>
        <title>Contact Form Using PHP</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"                 integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="         crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"           integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX"                                 crossorigin="anonymous">
        
        <style type="text/css">
            
            .emailForm {
                border: 1px solid gray;
                border-radius: 10px;
                margin-top: 10px;
                
            }
            
            textArea {
                height: 20px;
            }
            
            form {
                padding-bottom: 20px;
            }
        
        
        </style>
    
    </head>
    
    <body>
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-6 col-md-offset-3 emailForm">
                    
                    <h1>E-Mail Form</h1>
                    <?php echo $result; ?> <!--php code--> 
                    <p class="lead">I'll get in touch, Please fill-in the form</p>
                    
                    <form method="post">
                        
                        <div class="form-group">   
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter your name" value="<?php echo $_POST['name']; ?>" />
                        </div>
                        
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" type="email" class="form-control" placeholder="Enter your e-maill address" value="<?php echo $_POST['email']; ?>" />
                        </div>
                        
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea name="comment" class="form-control" placeholder="Enter your comment"></textarea>
                        </div>
                        
                        <input type="submit" name="submit" class="btn btn-success" value="Submit" />
  
                    </form>
               
                </div>
            
            </div>
        
        </div>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous">
        
        </script>
        
    </body>
</html>