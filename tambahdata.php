<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body {
			background-color: pink;
		}
	</style> 
<h1> Isi Data Baru </h1>
<!-- Membuat form data pegawai -->
<form method="POST" action="#">
	<table width="400" cellpadding="2" cellspacing="2">
		<tr>
			<td width="130"> Nama </td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td width="130"> Email </td>
			<td><input type="text" name="email" required></td>
		</tr>
		<tr>
			<td width="130"> Alamat </td>
			<td><input type="text" name="alamat" required></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btnSimpan" value="Simpan">
				<input type="reset" name="btnReset" value="Reset">
			</td>
		</tr>
	</table>
</form>
<!-- Ketika button batal di klik akan berpindah ke tugas3.php -->
<form action="tugas3.php">
    <input type="submit" value="Batal" />
</form>
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

// Jika btnSimpan diklik
if(isset($_POST['btnSimpan'])){

	// Membuat data
	$sql= "INSERT INTO pegawai(nama, email, alamat, id_jurusan) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[alamat]', '1')";
	if(mysqli_query($conn, $sql)){
		echo "New record created succesfully";
		// Pindah ke tugas3.php
		echo "<meta HTTP-EQUIV='REFRESH' content='1; url=tugas3.php'>";
	} else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	// Menutup koneksi
	mysqli_close($conn);	
}

?>