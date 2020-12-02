<?php
require 'function.php';

$jenjang = $_GET ["jenjang"];

if(hapus($jenjang) > 0 ) {
	echo "databerhasil dihapus";
	} else {
		echo "data gagal dihapus";
	}

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="./style.css">
    <hr>
	<title>hapus data Barang</title>
</head>
<body>
	<h1>hapus  data barang</h1>


</body>
</html>
