<?php
// Deklarasi nama server, username, dan password
$servername="localhost";
$username="root";
$password="";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password);

// Cek koneksi
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

// Buat database
$sql= "CREATE DATABASE bukutamu";
if(mysqli_query($conn, $sql)){
	echo "Database created succesfully";
} else{
	echo "Error creating database". mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>