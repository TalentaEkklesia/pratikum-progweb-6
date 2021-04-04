<?php
$servername = "localhost"; // Mendeklarasikan variabel servername yaitu localhost
$username = "root"; // Mendeklarasikan variabel username yaitu root
$password = ""; // Mendeklarasikan variabel password yaitu ""

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password); 

// Cek koneksi
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); // Akan memunculkan Connection failed dan pesannya jika koneksi gagal
}

// Buat database
$sql = "CREATE DATABASE newDB";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully"; // Menampilkan teks Database created succesfully jika database berhasil dibuat
} else {
	echo "Error creating database: ".mysqli_error($conn); // Menampilkan teks Error creating database jika database gagal dibuat
}

mysqli_close($conn); // Menutup koneksi mysqli
?>