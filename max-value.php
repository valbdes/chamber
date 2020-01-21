<?php

$numbers = [2, -2, 5, 0, -88, 100, -95, 50, 33];

function max_value($max_val)
{
    $current_max_value = null;
    foreach ($max_val as $item) {
        if ($current_max_value === null) {
            $current_max_value = $item;
        };
        if ($current_max_value < $item) {
            $current_max_value = $item;
        }
    }
    return $current_max_value;
}
echo max_value($numbers);