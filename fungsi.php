<?php 
require "koneksi.php";


function daftar($data) {
	global $kon;

	$nama = mysqli_real_escape_string($kon, $data["namapengguna"]);
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($kon, $data["password"]);
	$alamat = mysqli_real_escape_string($kon, $data["alamat"]);
	$Email = mysqli_real_escape_string($kon, $data["Email"]);


	// scan username apakah sudah terdaftar

	$cek = mysqli_query($kon,"SELECT * FROM registrasi WHERE username='$username'");

	if (mysqli_fetch_assoc($cek)) {
		// code...
		echo"<script>
		alert('username sudah terdaftar atau data kosong');
		document.location.href='register.php';
		</script>";
		return false;
	}

	if (empty($nama)|| empty($username) || empty($pasword) || empty($alamat) || empty($Email)) {
		
	}

	$query = mysqli_query($kon,"INSERT INTO registrasi VALUES ('','$nama','$username','$password','$alamat','$Email')");

	return mysqli_affected_rows($kon);

}










 ?>