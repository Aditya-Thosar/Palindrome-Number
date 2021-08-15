 <?php  

function palindrome($n){  
$num = $n;  
$rev = 0;  

while(floor($num)) 
   {  
    $rem = $num % 10;  
    $rev = $rev * 10 + $rem;  
    $num = $num/10;  
   } 
    return $rev;   
 }  

$input = 365; 
$a = palindrome($input);   

if($input==$a)
  {  
    echo "$input is a Palindrome number";  
  } 
else 
  {  
    echo "$input is not a Palindrome";  
  }  

?>   