<?php

// String of data
$names = 'Alex (21), Billy (16), Dale (49)';
echo $names;
echo '<br>';

// Array of data
// Array indexes begin at '0'
$names = array('Alex', 'Billy', 'Dale');
print_r($names);
echo '<br>';

// echos Dale
echo $names[2];

echo '<br>';

// The keys are now the names
$names = array('Alex'=>21, 'Billy'=>16, 'Dale'=>49);
print_r($names);

echo '<br>';

// echos 49
echo $names['Dale'];

echo '<br>';

// Add to an existing array
$names['Josh']=18;
print_r($names);

echo '<br>';

// Change a value in an array

$names['Alex']=18;
print_r($names);

?>