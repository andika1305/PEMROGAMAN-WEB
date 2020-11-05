<?php
require 'function.php';
$barang =query ("SELECT * FROM barang");

//tombol cari ditekan
if(isset($_POST["cari"]) ){
	$barang = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./style.css">
</head>
<body>

<h1 align="center">Barokah Minimarket</h1>
<p align="right"><a href="index.php  ?>">Beranda</a></p>
<hr>

<p1> Daftar Barang</p1>
<br><br>
<a href="tambah.php">Tambah data barang</a>
<br><br>

<form action= "" method="post">

	<input type="text" name="keyword" size= "30" 
	placeholder="Masukan keyword pencarian" autocomplete="off">
	<button type="submit" name="cari">Cari</button>
	
</form>

<br>

<table border="1" cellpandding="40" cellspacing="0">
	<tr>
		<th>id_barang</th>
		<th>nama_barang</th>
		<th>kategori</th>
		<th>jumlah_barang</th>
		<th>harga_barang</th>
		<th>Aksi</th>
	</tr>

	<?php foreach ($barang as $row ):?>
	<tr>
		<td><?= $row["id_barang"]; ?></td>
		<td><?= $row["nama_barang"]; ?></td>
		<td><?= $row["kategori"]; ?></td>
		<td><?= $row["jumlah_barang"]; ?></td>
		<td><?= $row["harga_barang"]; ?></td>
		<td>
			<a href="ubah.php?id_barang=<?= $row["id_barang"];?>">ubah</a>
			<a href="hapus.php?id_barang=<?= $row["id_barang"];?>">hapus</a>
	</tr>
<?php endforeach; ?>

</table>
</body>
</html>