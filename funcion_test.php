<?php
$hue_array = [];
$value_array = [];

$colors = array(
    array(
        'color' => 'black',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#000',
        ),
    ),
    array(
        'color' => 'white',
        'category' => 'value',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FFF',
        ),
    ),
    array(
        'color' => 'red',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'blue',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#00F',
        ),
    ),
    array(
        'color' => 'yellow',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'green',
        'category' => 'hue',
        'type' => 'secondary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#0F0',
        ),
    ),
);

foreach ($colors as $value) {
    if ($value['category'] === 'hue') {
        array_push($hue_array, $value);
    } else {
        array_push($value_array, $value);
    }
};

$hue_arr_length = count($hue_array);
$value_arr_length = count($value_array);


function get_rgba_string($rgba_obj)
{
    return "rgba(" . $rgba_obj[0] . ", " . $rgba_obj[1] . ", " . $rgba_obj[2] . ", " . $rgba_obj[3] . ")";
};

function print_color_data($obj)
{
    if (!$obj) {
        return;
    };

    $base_message = "Это цвет " . $obj['color'] . " он из категории " . $obj['category'] . ". ";

    if (is_array($obj) && array_key_exists("type", $obj)) {
        $base_message .= "Тип цвета - " . $obj['type'] . ". ";
    };

    $base_message .= "В данном цвете следующие кода " . get_rgba_string($obj['code']['rgba']) . " и такой hex код -> " . $obj['code']['hex'];

    echo ("<p>" . $base_message . "</p>");
};

echo ('==== WHILE ====');
$i = 0;

while ($i <= $hue_arr_length) {
    $item = $hue_array[$i];

    print_color_data($item);
    $i++;
};

echo ('==== FOREACH ====');
foreach ($hue_array as $item) {
    print_color_data($item);
}

echo ('==== DO WHILE ====');
$i = 0;

do {
    $item = $value_array[$i];

    print_color_data($item);
    $i++;
    
} while ($i <= $value_arr_length);

echo ('==== FOR ====');

for ($i = 0; $i <= $value_array_length; $i++) {
    $item = $value_array[$i];

    print_color_data($item);
}