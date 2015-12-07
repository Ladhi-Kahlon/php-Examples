<?php

    $city=$_GET['city']; //variable will get city name from user input in index.php

    #php function to replace spaces, from city variable that has " " spaces.
    $city=str_replace(" ","", $city); 

    #file_get_contents get the content value from he page. and assing it to contents variable
    $contents= file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
    
    #preg_match is for reguler expresion (regex)
    #in example below seach for "3 Day Weather Forecast Summary" in Contents variable and assing it to mathces      array.
    //preg_match("/3 Day Weather Forecast Summary:/i", $contents, $matches);
    #Array ( [0] => 3 Day Weather Forecast Summary: ) //output example
    
    #example below extract "Weather Forecast" and assing it to matches array value
    //preg_match("/3 Day (.*?) Summary:/i", $contents, $matches);
    #Array ( [0] => 3 Day Weather Forecast Summary: [1] => Weather Forecast )  // output example

    

    preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s',$contents, $matches);

    echo $matches[1];


?>