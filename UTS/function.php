<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","barokahminimarket");

function query ($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah ($data){
	global $conn;
	$id_barang = $data["id_barang"];
	$nama_barang = $data["nama_barang"];
	$kategori = $data["kategori"];
	$jumlah_barang = $data["jumlah_barang"];
	$harga_barang = $data["harga_barang"];

	$query = "INSERT INTO barang
				VALUES 
				('$id_barang','$nama_barang','$kategori','$jumlah_barang', '$harga_barang')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function hapus($id_barang) {
	global $conn;
	mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id_barang");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id_barang = $data["id_barang"];
	$nama_barang = $data["nama_barang"];
	$kategori = $data["kategori"];
	$jumlah_barang = $data["jumlah_barang"];
	$harga_barang = $data["harga_barang"];

	$query = "UPDATE barang SET
				id_barang = '$id_barang',
				nama_barang = '$nama_barang',
				kategori = '$kategori',
				jumlah_barang = '$jumlah_barang',
				harga_barang = '$harga_barang'
				WHERE id_barang = $id_barang; 
				";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}


function cari($keyword){
	$query = "SELECT * FROM barang 
				WHERE
				id_barang = 'keyword' OR
				nama_barang = '$keyword' OR
				kategori = '$keyword'
				";
		return query($query);
}
?>