<!doctype HTML>
<html>
    <head>
        <title>Weather Scraping Site</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"           integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX"                                 crossorigin="anonymous">
        
        <style type="text/css">
            
            html, body {
                height: 100%;
            }
            .container {
                background-image: url("_images/WeatherBackground_II.jpg");
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                padding-top: 100px;
            }
            .center {
                text-align: center;
            }
            .white {
                color: whitesmoke;
            }
            p {
                padding-top: 15px;
                padding-bottom: 15px;
            }
            button {
                margin-top: 30px;
                
            }
            .alert {
                margin-top: 50px;
                display: none;
            }
 
        </style>
    
    </head>
    
    <body>
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-6 col-md-offset-3 center">
                    <h1 class="center white"><strong>Weather Forecast</strong></h1>
                    <p class="lead center white">Enter city name to get 3 days forecast.</p>
                    
                    <form>
                        
                        <div class="form-group">
                            
                            <input type="text" class="form-control" placeholder="Eg. Livermore, London, New York, Delhi..." name="city" id="city" />
                                                
                        </div>
                            
                            <button class="btn btn-success btn-lg" id="onSubmit">Find My Weather</button> 
                    
                    </form>
                    
                    <div class="alert alert-success" id="successResult">Success!</div>
                    <div class="alert alert-danger" id="failResult">Enter valid city name</div>
                    <div class="alert alert-danger" id="nullResult">Did not enter city name</div>
                    
                </div>  
            
            </div>
        
        </div>
        
        
        
        <!-- jQuery cdn -->
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Latest compiled and minified JavaScript Bootstrap CDN-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
            
            $("#onSubmit").click(function(event) { //function to run submit button on click
                                
                //alert("you did click");
                event.preventDefault();
                
                $(".alert").hide();
                
                if($("#city").val()!="") { //if value from city ID is not null then run function.

                    //get data from scraper.php with city is houston, and assign data to "data" variable
                    $.get("scraper.php?city="+$("#city").val(), function(data) {  
                        //alert data from "data" variable.
                        //alert(data);
                        
                        if(data=="") { //if city name does not return anything ()
                            
                            $("#failResult").fadeIn();
                            
                        } else { //on success return the following
                            
                            $("#successResult").html(data).fadeIn();
                            
                        }
                        

                    }); 
                    
                } else { //if the value for city is null
                    
                    //alert("Please enter a city name");
                    $("#nullResult").fadeIn();
                }
                
            });
        
        </script>
        
    </body>
</html>