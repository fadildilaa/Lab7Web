<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Dasar</title>
</head>
<body>
	<h2>Form input</h2>
	<form method="post">
		<label>Nama: </label>
		<input type="text" name="nama">
		<input type="submit" value="Kirim">
	</form>
	<?php
		echo 'Selamat Datang ' . $_POST['nama'];
	?>
	<?php
	$gaji = 1000000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji*$pajak);
	echo "Gaji sebelum pajak = Rp. $gaji <br>";
	echo "Gaji yang dibawa pulang = Rp. $thp";
	?>
</body>
</html>