<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

if(5<10)
{
    echo "I LOVE PHP <br>";
}

elseif(2>10)
{
    echo "FALSE";
}

else
{
    echo "false";
}




for($number = 0; $number <= 10; $number++)
{
    echo "$number" . "<br>";
}



$value = 10;
switch($value)
{
    case 1:
        echo "this is not";
        break;

    case 5:
        echo "this is not";
        break;
        
    case 10:
        echo "this is Ten";
        break;
    
    default:
        echo "Error";

}




?>