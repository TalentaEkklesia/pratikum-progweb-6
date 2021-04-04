<!DOCTYPE html>
<html>
<body>

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

$sql = " SELECT kode, negara, champion FROM liga"; // Mencari data kode, negara, champion pada tabel liga
$result = mysqli_query($conn, $sql); // Menampilkan hasil pencarian dengan menggunakan koneksi

if (mysqli_num_rows($result) > 0) {
	// Output data pada row
	while($row = mysqli_fetch_assoc($result)) {
		echo "kode: ". $row["kode"]. " - Negara: ".$row["negara"]." ".$row["champion"]."<br>"; // Menampilkan data kode, negara, champion pada row
	}
} else {
	echo "0 results"; // Menampilkan teks 0 results
}

mysqli_close($conn); // Menutup koneksi mysqli
?>

</body>
</html>