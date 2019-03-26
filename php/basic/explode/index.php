<?php

$likes = 'eating,drinking,the gym,nothing';
$likes = explode(',', $likes);

foreach($likes as $key => $like) {
    echo $like, ' at position ', $key, '<br>';
}

?>