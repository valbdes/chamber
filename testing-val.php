<?php

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

$array_hue = [];
$array_value = [];

foreach ($colors as $color) {
    if ($color['category'] === 'value') {
        array_push($array_value, $color);
    } else {
        array_push($array_hue, $color);
    }
}

$array_value_length = count($array_value);
$array_hue_length = count($array_hue);

echo('------ WHILE ------');
    
$i = 0;

while ($i < $array_hue_length) {
    $string = '<p>' . 'Это цвет' . ' ' . $array_hue[$i]['color'] 
    . ' ' . 'он из категории' . ' ' . $array_hue[$i]['category'] . '.' . ' ';
    if($array_hue[$i]['type'])  {
         $string .= "Тип цвета - " . $array_hue[$i]['type'] . ". ";
    };

    $string .= 'В данном цвете следующие кода:' . ' ' 
    . 'rgba(' . $array_hue[$i]['code']['rgba'][0] . ', ' 
    . $array_hue[$i]['code']['rgba'][1] . ', ' 
    . $array_hue[$i]['code']['rgba'][2] . ', '
    . $array_hue[$i]['code']['rgba'][3] . ')' . '. ' . 'И такой hex код =>' 
    . $array_hue[$i]['code']['hex']
    . '</p>'; 
    echo('<p>' . $string . '</p>');
    $i++;
}
echo('======FOREACH======');
foreach($array_hue as $item){
   $string = '<p>' . 'Это цвет' . ' ' . $item['color'] 
    . ' ' . 'он из категории' . ' ' . $item['category'] . '. ';
    if($item['type'])  {
        $string .= "Тип цвета - " . $item['type'] . ". ";
    };

    $string .=  'В данном цвете следующие кода:' . ' ' 
    . 'rgba(' . $item['code']['rgba'][0] . ', ' 
    . $item['code']['rgba'][1] . ', ' 
    . $item['code']['rgba'][2] . ', '
    . $item['code']['rgba'][3] . ')' . ' ';
    
    $string .= '.' . 'И такой hex код =>' 
    . $item['code']['hex']
    . '</p>';
    echo $string;
};
echo('______DO______');
$i = 0;
do {
    $string = '<p>' . 'Это цвет' . ' ' . $array_value[$i]['color'] 
    . ' ' . 'он из категории' . ' ' . $array_value[$i]['category'] . '.'  . ' '
    // Поменять IF  после категории  
    . 'В данном цвете следующие кода:' . ' ' 
    . 'rgba(' . $array_value[$i]['code']['rgba'][0] . ', ' 
    . $array_value[$i]['code']['rgba'][1] . ', ' 
    . $array_value[$i]['code']['rgba'][2] . ', '
    . $array_value[$i]['code']['rgba'][3] . ')' . ' ';
    
    if($array_value[$i]['type'])  {
        $string .= "Тип цвета - " . $array_value[$i]['type'] . ". ";
    };

    $string .= 'И такой hex код =>' 
    . $array_value[$i]['code']['hex']
    . '</p>';
    echo $string; 
    $i++;
} while($i < $array_value_length);

echo('------FOR------');

for($i = 0; $i < $array_value_length; $i++) {
    $string = '<p>' . 'Это цвет' . ' ' . $array_value[$i]['color'] 
    . ' ' . 'он из категории' . ' ' . $array_value[$i]['category'] . '.'  . ' '  
    . 'В данном цвете следующие кода:' . ' ' 
    . 'rgba(' . $array_value[$i]['code']['rgba'][0] . ', ' 
    . $array_value[$i]['code']['rgba'][1] . ', ' 
    . $array_value[$i]['code']['rgba'][2] . ', '
    . $array_value[$i]['code']['rgba'][3] . ')' . ' ';
    // убрать  функцию array_key_exists   и правильно обратиться к типу в массиве
    if(array_key_exists('type', $array_value[$i]))  {
        $string .= "Тип цвета - " . $array_value[$i]['type'] . ". ";
    }
// добавить перед "И" точку
    $string .= 'И такой hex код =>' 
    . $array_value[$i]['code']['hex']
    . '</p>';
    echo $string;
}
