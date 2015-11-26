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
        
        $names=array("Kha","Yash","Veer"); //check if name value using POST variable from form input
        
        if($_POST['submit']) { //once the submit button is clicked, name="submit" will have value >>starting point
            
            if($_POST['name']) { //check if the name variable has value ($_POST and $_GET get value of 1), 
                
                //echo "hello ".$_POST['name']; //display name if value 
                
                foreach($names as $name){
                    
                    if($_POST['name']==$name) {
                        
                        echo "I know you. Hello ".$_POST['name'];
                        
                        $iMatch = 1;
                    }
                }
                
                if(!$iMatch) {
                    
                    echo "I don't know you...";
                }
                
            } else { //else ask to enter value
                
                echo "You didn't enter anyting";
                
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