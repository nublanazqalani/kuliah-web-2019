<?php

$db = new mysqli('127.0.0.1', 'root', '', 'mysqli');

$usersResult = $db->query("SELECT COUNT(id) as count FROM users");

$users = $usersResult->fetch_object();

echo $users->count;