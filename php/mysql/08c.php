<?php

$db = new mysqli('127.0.0.1', 'root', '', 'mysqli');

$count = $db->query("SELECT SQL_CALC_FOUND_ROWS id FROM users");
$countResult = $db->query("SELECT FOUND_ROWS() as count");

var_dump($countResult->fetch_object());