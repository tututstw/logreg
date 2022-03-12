<?php 
require "koneksi.php";
require "fungsi.php";
session_start();
 
 $username = $_SESSION['username'];
 $query2 = query("SELECT * FROM registrasi WHERE username ='$username'");
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>beranda</title>
</head>
<body>
		<h1>barang jualan anda <?= $query2["username"] ?></h1> <br>
            <a href="logout.php" class="btn">Logout</a>
        </form>
</body>
</html>