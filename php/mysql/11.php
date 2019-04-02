<?php

include "db_conn.php";

$email = "', 'Hacked', 'Hacked', ''); DROP TABLE topics; --";

$insert = $db->multi_query("
	INSERT INTO users (email, first_name, last_name, created)
	VALUES ('{$email}', 'Alex', 'Garrett', NOW())
");
?>