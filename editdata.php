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
// Mengambil data pegawai sesuai id di url
$sql= "SELECT * FROM pegawai WHERE id_pegawai=$_GET[id]";
$result= mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);

?>
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
<h1> Ubah Data </h1>
<!-- Membuat form untuk mengubah data -->
<form method="POST" action="#">
	<table width="400" cellpadding="2" cellspacing="2">
		<tr>
			<td width="130"> Nama </td>
			<td><input type="text" name="nama" value="<?php echo $row['nama'] ?>" required></td>
		</tr>
		<tr>
			<td width="130"> Email </td>
			<td><input type="text" name="email" value="<?php echo $row['email']?>" required></td>
		</tr>
		<tr>
			<td width="130"> Alamat </td>
			<td><input type="text" name="alamat" value="<?php echo $row['alamat']?>" required></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btnUbah" value="Ubah">
			</td>
		</tr>
	</table>
</form>
<!-- Kembali ke tugas3.php -->
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

if(isset($_POST['btnUbah'])){

	// Memperbarui data
	$sql= "UPDATE pegawai SET nama='$_POST[nama]', email='$_POST[email]', alamat='$_POST[alamat]' WHERE id_pegawai='$_GET[id]'";
	if(mysqli_query($conn, $sql)){
		echo "Data berhasil diubah";
		// Pindah ke tugas3.php
		echo "<meta HTTP-EQUIV='REFRESH' content='1; url=tugas3.php'>";
	} else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	// Menutup koneksi
	mysqli_close($conn);	
}

?>