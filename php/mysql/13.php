<?php

require "db_conn.php";

$users = $db->prepare("SELECT email, first_name, last_name FROM users WHERE first_name = ?");

$users->bind_param('s', $_GET['first_name']);

$users->execute();

$users->bind_result($email, $firstName, $lastName);

while ($users->fetch()) {
	echo $email, '<br>';
}