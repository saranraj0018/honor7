<?php 
$input = array(4,8,6,7,9,3,1); 
  

function oddCmp($input) 
{ 
    return ($input & 1); 
} 
 
function evenCmp($input) 
{ 
    return !($input & 1); 
} 
$odd = array_filter($input, "oddCmp"); 
$even = array_filter($input, "evenCmp"); 


print_r($odd); 
print_r($even); 
echo "<br>";
print_r(array_merge($even,$odd));
?> 