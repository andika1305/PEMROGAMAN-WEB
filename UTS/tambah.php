<?php
require 'function.php';
//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	// cek data berhasil atau tidak
	if(tambah($_POST) > 0) {
		echo "databerhasil ditambahkan";
	} else {
		echo "data gagagl ditambahkan";
	}

}	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./style.css">
	<h1 align="center">Barokah Minimarket</h1>
	<p align="right"><a href="index.php  ?>">Beranda</a></p>
    <hr>
	<title>Tambah data Barang</title>
</head>
<body>
	<p1>Tambah data barang</p1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="id_barang">id_barang : </label>
				<input type="text" name="id_barang" required>
			</li>
			<li>
				<label for="nama_barang">nama_barang : </label>
				<input type="text" name="nama_barang" required>
			</li>
			<li>
				<label for="kategori">kategori : </label>
				<input type="text" name="kategori" required>
			</li>
			<li>
				<label for="jumlah_barang">jumlah_barang : </label>
				<input type="text" name="jumlah_barang" required>
			</li>
			<li>
				<label for="harga_barang">harga_barang : </label>
				<input type="text" name="harga_barang" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah data</button>
			</li>
		</ul>

	</form>


</body>
</html>
