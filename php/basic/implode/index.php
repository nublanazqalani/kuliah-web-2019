<?php

$names = array('Alex', 'Billy', 'Tabby');

echo implode(', ', $names);

echo '<br>';

// collect and process data

$name = 'alex';
$email = 'alex@phpacademy.com';
$message = 'Really great site, love it!';
$telephone = 123456789;

$data = array(
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'telephone' => $telephone,
);

$fields_sql = '`' . implode('`, `', array_keys($data)) . '`';
$values_sql = '\'' . implode('\', \'', $data) . '\'';

$sql = "
    INSERT INTO `table` ($fields_sql)
    VALUES ($values_sql)
";

echo $sql;

?>