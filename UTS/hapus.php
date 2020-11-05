<?php
require 'function.php';

$id_barang = $_GET ["id_barang"];

if(hapus($id_barang) > 0 ) {
	echo "databerhasil dihapus";
	} else {
		echo "data gagagl dihapus";
	}

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="./style.css">
<h1 align="center">Barokah Minimarket
<p align="right"><a href="index.php  ?>">Beranda</a></p>
    <hr>
	<title>hapus data Barang</title>
</head>
<body>
	<h1>hapus  data barang</h1>


</body>
</html>
