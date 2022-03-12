<?php 
require "fungsi.php";
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: beranda.php");
}

if (isset($_POST["register"])) {
    // code...
    echo "<script>
    document.location.href='register.php';
    </script>";
}

if (isset($_POST["login"])) {
    // code...
    $username = $_POST["username"]; 
    $password = $_POST['password'];

    $query = mysqli_query($kon,"SELECT * FROM registrasi WHERE username = '$username' AND password ='$password'" );


    if (mysqli_num_rows($query)) {
        // code...
        $_SESSION['username'] = $row['username'];
        echo "
        <script>
        alert('login berhasil');
        document.location.href='beranda.php';
        </script>
        ";
    }else{
        echo "<script>alert('username atau password salah'); document.location.href='login.php';</script>";
        return false;
    }
}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<title> LOGIN </title>
 </head>
 <body>

 <section class="row justify-content-center">
    <form method="post" style="text-align: center;">
 		<table>
 			<tr>
 				<td>
 					<h1>LOGIN</h1>
 					<input type="text" name="username" required placeholder="Username">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<input type="password" name="password" required placeholder="Password">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<button type="submit" name="login">login</button>
 					<button type="submit" name="register">register</button>
 				</td>
 			</tr>
 		</table>
 	</form>
 </section>
 
 </body>
 </html>