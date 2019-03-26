<?php

// Comparison Operartors

/**
 *  ==  - Equal to
 *  !=  - Not equal to
 *  >   - greater than
 *  <   - less than
 *  >=  - less than or equal to
 *  <=  - greater than or equal to
 *  <>  - Not equal to
 */

$name = 'Alex';
$age = 22;

if ($name == 'Alex') {
    echo 'TRUE';
} else {
    echo 'NOT TRUE.';
}

echo '<br>';

if ($age>=24) {
    echo 'TRUE.';
} else {
    echo 'NOT TRUE.';
}

echo '<br>';

if ($age<>23) {
    echo 'TRUE.';
} else {
    echo 'NOT TRUE.';
}

echo '<br>';

$age = 21;
$status = false; // boolean

if ($age>=21) {
    $status = true;
}

if ($status==true) {
    echo 'You\'re allowed.';
} else if ($status == false) {
    echo 'Sorry, not allowed.';
}

?>
