<?php

$db = new mysqli('127.0.0.1', 'root', '', 'mysqli');

$updateUser = $db->query("UPDATE users SET last_name = 'Garrett'");

echo "{$db->affected_rows} rows were updated.";