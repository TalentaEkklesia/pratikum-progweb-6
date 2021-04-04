<!DOCTYPE html>
<html>
<head>
	<title> Koneksi Database MySQL </title>
</head>
<body>
	<h1> Demo Koneksi Database MySQL </h1>
	<?php
	$conn = mysqli_connect("localhost","root","","mydb"); // Membuat koneksi database melalui localhost phpmyadmin

	// Cek koneksi
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: ". mysqli_connect_error(); // Menampilkan teks Failed to connect to MySQL jika cek koneksi error
		exit(); // Keluar
	}
	?>
</body>
</html>