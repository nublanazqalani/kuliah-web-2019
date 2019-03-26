<?php

$num = 1;

while ($num!=1) {
    echo 'This';
}

do {
    echo 'That';
} while ($num!=1);

echo '<br>';
echo '<br>';

$num = 1;

do {
    echo $num.'<br>';
    $num++;
} while ($num<=10)


?>