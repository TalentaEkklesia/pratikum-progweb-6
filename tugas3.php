<!DOCTYPE html>
<html>
<head>
	<title> Data Pegawai </title>
</head>
<body>
	<style type="text/css">
		body {
			background-color: pink;
		}
	</style>
<center><h1> Data Pegawai </h1></center>
<?php
// Deklarasi nama server, username, password, dan dbname
$servername="localhost";
$username="root";
$password="";
$dbname="db_fakultas";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

// Mengambil semua data yang ada di tabel pegawai
$sql= "SELECT * FROM pegawai";
$result= mysqli_query($conn, $sql);

// Jika ada datanya
if(mysqli_num_rows($result) > 0){
	// Output dari data pada masing-masing baris
	//'?id=$row[id_pegawai]' digunakan untuk menuliskan id_pegawai yang dipilih dan ditampilkan pada url
	while ($row = mysqli_fetch_assoc($result)) {
		echo "================================";
		echo "<br>";
		echo "Nama: ". $row["nama"] ."<br>Email: ". $row["email"] ."<br>Alamat: ". $row["alamat"] ."<br>";
		echo "<tr>
		<td><a href='editdata.php?id=$row[id_pegawai]'>Edit</a></td>
		&emsp;|&emsp;
		<td><a href='?id=$row[id_pegawai]'>Hapus</a></td>
		</tr><br>";
	}
} else{
	echo "Tidak Ada Data";
}
// Untuk berpindah ke halaman tambahdata
echo"<br><br><form action='tambahdata.php'><input type='submit' name='btnTambah' value='Tambah Data'></form>";

mysqli_close($conn);
?>
</body>
</html>
<?php
// Deklarasi nama server, username, password, dan database
$servername="localhost";
$username="root";
$password="";
$dbname="db_fakultas";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

if(isset($_GET['id'])){

	// Hapus data pegawai sesuai id_pegawai yang dipilih
	$sql= "DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'";
	if(mysqli_query($conn, $sql)){
		echo "Data berhasil dihapus";
		// Membuka kembali tugas3.php
		echo "<meta HTTP-EQUIV='REFRESH' content='1; url=tugas3.php'>";
	} else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	// Menutup koneksi
	mysqli_close($conn);	
}
?>