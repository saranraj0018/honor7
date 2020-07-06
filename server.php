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
$odd = array_values(array_filter($odd)); 
$even = array_values(array_filter($even)); 
print"Odd array :"; 
print_r($odd); 
print"Even array :"; 
print_r($even); 
  
?> 