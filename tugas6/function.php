<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","cv");

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
	$jenjang = $data["jenjang"];
	$nama_sekolah = $data["nama_sekolah"];
	$alamat = $data["alamat"];
	
	$query = "INSERT INTO pendidikan
				VALUES 
				('$jenjang','$nama_sekolah','alamat')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function hapus($jenjang) {
	global $conn;
	mysqli_query($conn, "DELETE FROM pendidikan WHERE jenjang = $ijenjang");
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM pendidikan 
				WHERE
				jenjang = 'keyword' OR
				nama_sekolah = '$keyword' OR
				alamat = '$keyword'
				";
		return query($query);
}
?>s