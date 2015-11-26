<!doctype HTML>
<html>
    <head>
        <title>Form validation using PHP</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
    
    <body>
        
        <?php
        
        /*$_GET globar variable to get, but use POST variable*/
        
        print_r($_POST);
        
        if($_GET['submit']) { //if input name="submit" has value then ...
            
            
            if($_GET['name']) { //if inpule name="name" has value then ...
                
                echo "You name is ".$_GET['name'];
                
            } else {
                
                echo "Please enter your name";
            }
        }
        
        ?>
        
        <form method="post">
            
            <label for="name">Enter Name</label>
            <input name="name" type="text" placeholder="Enter Name" />
            
            <label for="email">Enter E-mail</label>
            <input name="email" type="email" placeholder="Enter E-maill address" />
            
            <input type="submit" name="submit" value="Submit Your Name" />
        
        
        </form>
    </body>


</html>