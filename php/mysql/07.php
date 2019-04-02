<?php

$db = new mysqli('127.0.0.1', 'root', '', 'mysqli');

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name FROM users");

echo $users->fetch_object()->email;

$users->free();