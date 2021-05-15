<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
    <h3>Tambah Data</h3>
		<form action="" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password"></td>
			</tr>
			<tr>
				<td>ID Pegawai</td>
				<td><input type="number"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk"> Laki- Laki
					<input type="radio" name="jk"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><select>
					<option>Direktur Gaji Rp. 10.000.000</option>
					<option>Staff Gaji 6.000.000</option>
					<option>HRD Gaji Rp. 8.000.000</option>
					<option>Admin Gaji Rp.5.000.000</option>
					<option>OB Gaji Rp.3000.000</option>
				</select>
				</td> 
			<tr>
				<td>Alamat</td>
				<td><textarea></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan">
					<input type="reset" value="Reset">
					<input type="button" value="Kembali">
				</td>
			</tr>
		</table>
		</form>
</body>
</html>