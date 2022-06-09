<?php
//comments in php
//To print use echo. i.e:
echo"Just type echo and type whatever you want in double quote to print in php";
// To create variables type: $ then name of variable. i.e
$greeting = "Hello. This is a variable. To create a variable, use the $ before the variable name.";
echo "<p>" .  $greeting . "</p>";
$if = "If Loop";
//Creating arrays. To create an array. Call the array function as long as the values are of the same data type i.e
$programming_languages = array("Javascript", "Python", "Php");
echo"To create an array. Call the array function as long as the values are of the same data type i.e<br/>";
echo var_dump($programming_languages[0]);

echo "<br/>";

echo var_dump($programming_languages[1]);

echo "<br/>";

echo var_dump($programming_languages[2]);


//Creating constant. Constants can never be changed. To create them, Just call the define function followed by the values of the constant. It can be of any data type
define("OS", ["Linux", "Windows", "Macintosh", "Unix"]);

echo "<br/>";
echo "<br/>";

echo "Creating constant. Constants can never be changed. To create them, Just call the define function followed by the values of the constant. It can be of any data type.";
echo "<br/>";
echo "<br/>";


echo OS[0];
echo "<br/>";
echo OS[1];
echo "<br/>";
echo OS[2];
echo "<br/>";
echo OS[3];

//Loops in PHP
//If condition

echo "<h2>" . $if . "</h2>";

$var = 7;
if($var > 7){
    echo "$var is greater than 7";
}elseif($var==7){
    echo "$var is equal to 7";
}else{
    echo "$var is less than 7";
}
//Switch statement

$level=2;
switch ($level) {
    case 1:
        # code...
        echo "<br/>";
        echo "This is an easy level";
        break;
    case 2:
        # code...
        echo "<br/>";
        echo "This is a medium level";
        break;
    case 3:
        # code...
        echo "<br/>";
        echo "This is a Hard level";
        break;
    
    default:
        # code...
        echo "<br/>";
        echo "What the hell is that motherFucker";
        break;
}

//Loops in Php
//While Loop
$joint=TRUE;
while ($joint==TRUE) {
    # code...
    echo "<h3> Pass the blunt Motherf**ker </h3>";
    $joint=FALSE;
}

//do......while loop in php

$age=21;
do{
    echo "Eat! Sleep! Trade! Code! <br />";
    $age+=1;
}while($age >= 21 && $age<=55);




//functions in php
function name(){
//for loop

for($var = 1; $var <= 11; $var++){
    echo "Hi there my name is Pavin Kiptoo <br/>";
}
}

name();

//OOP in PHP
// Include: Classes, Objects, Polymorphism, Inheritance, Member functions, Constructor, Destructor
//Object: Instance of a class i.e: Car is a class, Toyota, Mercedes- Objects
?>