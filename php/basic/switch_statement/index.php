<?php

$num = 10;

switch ($num) {
    case 10:
        echo 'Ten';
    break;

    case 9:
        echo 'Nine';
    break;

    case 8:
        echo 'Eight';
    break;

    default:
        echo 'Number is not recognized.';
    break;
}

echo '<br>';

$num = 'Ten';

switch ($num) {
    case 'Ten':
        $num = 10;
    break;

    case 'Nine':
        $num = 9;
    break;

    case 'Eight':
        $num = 8;
    break;

    default:
        $num = 'Number is not recognized.';
    break;
}

echo $num;

echo '<br>';

$name = 'Alex';

switch ($name) {
    case 'Alex':
    case 'Billy':
    case 'Josh':
        echo 'Hello there.';
    break;

    default:
        echo 'Go away.';
    break;
}

?>