<?php

$db = new mysqli('127.0.0.1', 'root', '', 'mysqli');

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name FROM users");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>MySQLi</title>
	</head>
	<body>
		<?php while ($row = $users->fetch_assoc()): ?>
			<p><?php echo $row['full_name']; ?>, <?php echo $row['email']; ?>, <?php echo $row['created']; ?></p>
		<?php endwhile; ?>
	</body>
</html>