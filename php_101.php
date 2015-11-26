<?php

#variable assignment in php, var is the name of the variable and assinged value = ladhi
//$var = "ladhi";
#to display variable use echo command.
//echo $var;
//echo "Name is:".$var;
#concatnate example
//$var2 = "My name is";
//echo $var2." ".$var;

#array example in php
#array assignment option 1
//$myArray = array ("pizza","chocolate", "coffee");
#display array, can not use echo
//print_r($myArray);
#to access a pritucler array
//echo $myArray[2]; //example will get array key 2.
//echo "<br /><br />";
//echo $myArray[0];
#another way to create and assign values to array
/*
$anotherArray[0]="pizza"; //assign pizza value to key 0 of anotherArray
$anotherArray[1]="choholate"; //assign choholate value to key 1 of anotherArray
$anotherArray[2]="coffee"; //assign coffee value to key 2 of anotherArray
print_r($anotherArray);
*/
#3rd way to create and assign values to array's
/*
$thirdArray=array (     //array name will be thirdArray
    "Germany"=>"German", //key here is Germany and value = German
    "USA"=>"English",    //key here is USA and value = English
    "India"=>"Hindi",    //key for this one is India and Value = Hindi
    "Pakistan"=>"Urdu" 
);
print_r($thirdArray);
echo "<br />";
unset($thirdayArray["Pakistan"]);
print_r($thirdArray);
*/

#if statment in php
/*
$firstNum = 1;
$secondNum = 5;

if(!($firstNum==$secondNum)) {
    echo "True";
} else {
    echo "false";
};
*/

#loop >> for, foreach, while
/*for($i=0; $i<=10; $i++) {
    echo $i."<br />";
}
for($i=0; $i<=10; $i=$i+2) { //if want to loop for +2 incrament
    echo $i."<br />";
}
*/

#usig loop with array's
#foreach
//$array=array ("cat","dog","turtle","kangaroo");
//print_r($array) //testing array
/*
foreach($array as $key => $value) {
    
    echo "Key: $key Value: $value <br />";
}
*/
#while
/*
$i=0;
$whileArray=array ("apple","banana","grape");
while($whileArray[$i]) {
    
    echo "Key: $i Value $whileArray[$i] <br />";
    
    $i++;
    
}
*/

echo "Hello Earth";

?>