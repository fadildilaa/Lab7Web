<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Dasar</title>
</head>
<body>
	<h2>Perulangan downwhile</h2>
	<?php
	echo "Perulangan 1 sampai 10 <br />";
	$i=15;
	do {
		echo "Perulangan ke: " . $i . '<br />';
		$i++;
	} while ($i<=50);
	?>
</body>
</html>