<?php
function factorial($number)
{
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
        echo $factorial;
    }
    return $factorial;
}
echo factorial(5);