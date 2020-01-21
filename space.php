<?php


function get_max_value($array)
{
    return max($array);
}


function get_min_value($array)
{
    return min($array);
}

$numbers = [2, -2, 5, 0, -88, 100, -95, 50, 33];

echo (get_max_value($numbers));
echo ('<br>');
echo (get_min_value($numbers));
// function factorial($number)
// {
//     $factorial = 1;

//     for ($i = 1; $i <= $number; $i++) {
//         $factorial *= $i;
//     }
// }
// echo factorial(5);

// function reverse($number)  
// {   
//     $num = (string) $number;   
//     $revstr = strrev($num);    
//     $reverse = (int) $revstr;   
//      return $reverse;  
// }  
//  echo reverse(11223123);
