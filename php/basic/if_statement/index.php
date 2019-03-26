<?php

$password = 'password';

if ($password=='alex') {
    echo 'This is the correct password!</br>';
} else {
    echo 'This is the wrong password!</br>';
}

$age = 21;

if ($age>=21) {
    echo 'You\'re old enough to drink in the USA and the UK.</br>';
} else if ($age>=18) {
    echo 'Your\'re old enough to drink in the UK.</br>';
} else {
    echo 'Your\'re not old enough to drink in the USA or the UK.</br>';
}

?>