<?php 
$servername = "localhost"; // Mendeklarasikan variabel servername yaitu localhost
$username = "root"; // Mendeklarasikan variabel username yaitu root
$password = ""; // Mendeklarasikan variabel password yaitu ""
$dbname = "newDB"; // Mendeklarasikan variabel dbname yaitu newDB

// Buat koneksi 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); // Akan memunculkan Connection failed dan pesannya jika koneksi gagal
}

// Membuat tabel dengan nama liga pada database newDB
$sql = "CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
kode VARCHAR(3) NOT NULL,
negara VARCHAR(30) NOT NULL,
champion int(3))";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully"; // Menampilkan teks New record created successfully jika koneksi dan data berhasil dibuat
} else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); // Menampilkan error jika data tidak berhasil dibuat/error
}

mysqli_close($conn); // Menutup koneksi mysqli
?>