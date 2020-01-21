<?php

$numbers = [2, -2, 5, 0, -88, 100, -95, 50, 33];

function min_value($min_val)
{
    $current_min_value = null;
    foreach ($min_val as $item) {
        if ($current_min_value === null) {
            $current_min_value = $item;
        };
        if ($current_min_value > $item) {
            $current_min_value = $item;
        }
    }
    return $current_min_value;
}
echo min_value($numbers);