<?php
    $db = new mysqli('127.0.0.1', 'root', '', 'mysqli');
    if ($db->connect_errno !== 0) {
        die('We are down at the moment, try again soon.');
    }
?>