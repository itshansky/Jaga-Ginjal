<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Sistem Pakar Penyakit Ginjal</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head> 

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="POST">
			<h1>Buat Akun</h1>
			<center><img src="../assets/images/user.png" alt="" width="72" height="72"></center>
			<span>Daftarkan akun anda untuk memulai.</span>
            <input name="regname" type="text" placeholder="Nama" />
			<input name="regusername" type="text" placeholder="Username" />
			<input name="regpassword" type="password" placeholder="Password" />
			<br>
			<button type="submit" name="register">Daftar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="POST">
			<h1>Login</h1>
			<center><img src="../assets/images/user.png" alt="" width="72" height="72"></center>
			<span>Silahkan login menggunakan akun anda.</span>
			<input name="username" type="text" placeholder="Username" />
            <input name="password" type="password" placeholder="Password" />
            <br>
			<button type="submit" name="login">Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Sudah punya akun?</h1>
				<p>Login menggunakan informasi akun anda sekarang.</p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Belum Punya akun?</h1>
				<p>Daftarkan akun anda sekarang untuk dapat menggunakan sistem pakar.</p>
				<button class="ghost" id="signUp">Daftar</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Jaga SiGinjal - Sistem Pakar Penyakit Ginjal Berbasis Web - &copy; 2021
	</p>
</footer>
<script src="../assets/plugins/login.js"></script>

</html>

<?php
if (isset($_POST['login'])) {
    include("../config/connection.php");
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $check_user = $mysqli->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    $data_user = $check_user->fetch_array();
    $result_user = $check_user->num_rows;

    if ($result_user == 1) {
        session_start();
        $_SESSION['id_user'] = $data_user['id'];
        $_SESSION['user'] = $data_user['username'];
        $_SESSION['nama'] = $data_user['nama'];

        header("location:../index.php?home");
    } else {
        echo "<script>alert('Username and password invalid')</script>";
    }
}

if (isset($_POST['register'])) {
	include("../config/connection.php");
	$name = $_POST['regname'];
    $username = $_POST['regusername'];
    $password = md5($_POST['regpassword']);
	
	$sql = $mysqli->query("INSERT INTO user VALUES (null, '$username', '$password', '$name')");

    if ($sql) {
        echo "<script>alert('Selamat! anda sudah terdaftar. Silahkan login menggunakan akun baru anda!')</script>";
    }
}
?>