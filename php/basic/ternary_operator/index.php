<?php

$age = 18;
$old_enough = false;

if ($age >= 18) {
    $old_enough = true;
}

if ($old_enough === true) {
    echo 'Old enough';
} else {
    echo 'Not old enough';
}

echo '<br>';

// Use of ternary operator

$age = 16;

$old_enough = ($age >= 18) ? true : false;

echo ($old_enough === true) ? 'Old enough' : 'Not old enough';

?>