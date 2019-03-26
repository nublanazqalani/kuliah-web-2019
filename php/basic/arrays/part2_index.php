<?php

$levels = array(
    1 => array(
        'name' => 'Level 1',
        'desc' => 'This is the first level',  // A comma can be added to the last element in an array
    ),
    2 => array(
        'name' => 'Level 2',
        'desc' => 'You\'ve made it to level 2!',
    ),
    3 => array(
        'name' => 'Level 3',
        'desc' => 'The last level',
        'points' => array(1 => 1000),
    ),
);

// Access array elements
echo $levels[1]['name'];
echo '<br>';
echo $levels[3]['points'][1];

// Comment Block; begins with '/*' and ends with '*/'
/* Adding another element to the array
$levels[4] = array(
    'name' => 'Level 4',
    'desc' => 'Level 4!',
);*/

// An easier way to write the code above

$levels[4]['name'] = 'Level 4';

echo '<pre>', print_r($levels, true), '</pre>';

echo '<br>';
echo '<br>';



// Working with Global variables
echo 'Working with Globals:';
echo '<br>';
echo '<br>';



$GLOBALS['level'] = array(
    1 => array(
        'name' => 'Level 1',
        'desc' => 'This is the first level',  // A comma can be added to the last element in an array
    ),
    2 => array(
        'name' => 'Level 2',
        'desc' => 'You\'ve made it to level 2!',
    ),
    3 => array(
        'name' => 'Level 3',
        'desc' => 'The last level',
        'points' => array(1 => 1000),
    ),
);

function level_data($level, $data) {
    if (array_key_exists($level, $GLOBALS['level']) === true) {
        return $GLOBALS['level'][$level][$data];
    } else {
        return false;
    }
}

echo level_data(1, 'desc');

echo '<pre>', print_r($GLOBALS, true), '</pre>';

?>
