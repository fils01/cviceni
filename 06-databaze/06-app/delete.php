<?php

require 'db.php';

$stmt = $db->prepare("DELETE FROM clients WHERE id=?");
$stmt->execute(array($_GET['id']));

header('Location: index.php');

?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	<title>PHP Clients App</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

</body>

</html>
