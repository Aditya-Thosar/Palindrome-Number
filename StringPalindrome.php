<?php

function Palindrome($string){

    if (strrev($string) == $string)
    { 
        return 1; 
    }
    else
    {
        return 0;
    }
} 
 

$original = "RACECAR";

if(Palindrome($original))
{ 
    echo "$original is palindrome string."; 
}
else 
{ 
    echo "$original is not a palindrome string."; 
}

?> 