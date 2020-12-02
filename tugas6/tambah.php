<?php
require 'function.php';
//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	// cek data berhasil atau tidak
	if(tambah($_POST) > 0) {
		echo "databerhasil ditambahkan";
	} else {
		echo "data gagal ditambahkan";
	}

}	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./style.css">
    <p align="right"><a href="index.php  ?>">Beranda</a></p>
	<title>Tambah data </title>
</head>
<body>
	<p1>Tambah data </p1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="jenjang">jenjang : </label>
				<input type="text" name="jenjang" required>
			</li>
			<li>
				<label for="nama_sekolah">nama_sekolah : </label>
				<input type="text" name="nama_sekolah" required>
			</li>
			<li>
				<label for="alamat">alamat : </label>
				<input type="text" name="alamat" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah data</button>
			</li>
		</ul>

	</form>


</body>
</html>
