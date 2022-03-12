<?php 

require "fungsi.php";
require "koneksi.php";

if (isset($_POST["kembali"])) {
	// code...
	echo "<script>
	document.location.href='index.php';
	</script>";
}

if (isset($_POST["daftar"])) {
	// code...
	if (daftar($_POST) > 0 ) {
		// code...
		echo "<script>
		alert('berhasil registrasi');
		document.location.href='beranda.php';
		</script>";
	}else {
		echo "<script>
		alert('gagal');
		document.location.href='register.php';
		</script>";
		return false;
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
	<title>Register</title>
</head>
<body>
	<form method="post" style="text-align: center;">
		<table align="center" cellpadding="5" >	
		<tr>
			<td>
				<h1>REGISTER</h1>
				<label for="namapengguna">nama pengguna : </label> 
				<input type="text" id="namapengguna" name="namapengguna" required>
			</td>
		<tr>	
			<td>
				<label for="username">username : </label>
				<input type="text" id="username" name="username" required>
			</td>
		</tr>
		</tr>
		<tr>
			<td>
				<label for="password">password : </label>
				<input type="password" id="password" name="password" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="alamat">alamat: </label>
				<input type="text" id="alamat" name="alamat" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="Email">Email: </label>
				<input type="text" id="Email" name="Email" required>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit" name="daftar">daftar</button>
				<button type="submit" name="kembali">kembali</button>
			</td>
		</tr>
		</table>
	</form>
</body>
</html>