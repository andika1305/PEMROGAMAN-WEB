<?php
require 'function.php';

// ambil data di url
$id_barang = $_GET["id_barang"];
//query data barang berdasarkan id barang
$barang = query("SELECT * FROM barang WHERE id_barang = $id_barang")[0];


//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	// cek data berhasil atau tidak
	if(ubah($_POST) > 0) {
		echo "databerhasil diubah";
	} else {
		echo "data gagagl diubah";
	}

}	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./style.css">
	<h1 align="center">Barokah Minimarket
	<p align="right"><a href="index.php  ?>">Beranda</a></p>
    <hr>
	<title>ubah data Barang</title>
</head>
<body>
	<p1>ubah data barang</p1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="id_barang">id_barang : </label>
				<input type="text" name="id_barang" required
				value="<?= $barang["id_barang"]; ?>">
			</li>
			<li>
				<label for="nama_barang">nama_barang : </label>
				<input type="text" name="nama_barang" required
				value="<?= $barang["nama_barang"]; ?>">
			</li>
			<li>
				<label for="kategori">kategori : </label>
				<input type="text" name="kategori" required
				value="<?= $barang["kategori"]; ?>">
			</li>
			<li>
				<label for="jumlah_barang">jumlah_barang : </label>
				<input type="text" name="jumlah_barang" required
				value="<?= $barang["jumlah_barang"]; ?>">
			</li>
			<li>
				<label for="harga_barang">harga_barang : </label>
				<input type="text" name="harga_barang" required
				value="<?= $barang["harga_barang"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">ubah data</button>
			</li>
		</ul>

	</form>


</body>
</html>
