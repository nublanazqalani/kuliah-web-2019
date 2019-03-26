<?php

// Types of Logical Operators

/**
 *  ||  - OR
 *  &&  - AND
 *  !   - NOT
 */


$num = 50;

if ($num>=1 && $num<=100) {
    echo 'Number is fine.';
} else {
    echo 'Number must be between 1 and 100, inclusive.';
}

echo '<br>';

$name = 'Alex';
$age = 21;

if ($name=='Alex' || $name=='Billy') {
    echo 'Hello there!';
} else {
    echo 'Go away.';
}

echo '<br>';

if ($name=='Alex' && ($age==21 || $age==25)) {
    echo 'Hello there!';
} else {
    echo 'Go away.';
}

?>