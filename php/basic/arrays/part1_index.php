<?php

$levels = array(
    1 => array(
        'name' => 'Level 1',
        'desc' => 'This is the first level',  //A comma can be added to the last element in an array
    ),
    2 => array(
        'name' => 'Level 2',
        'desc' => 'You\'ve made it to level 2!',
    ),
    3 => array(
        'name' => 'Level 3',
        'desc' => 'The last level',
    ),
);

echo '<pre>', print_r($levels, true), '</pre>';

?>