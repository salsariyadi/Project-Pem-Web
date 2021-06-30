<?php
//Include file koneksi ke database
include "connection.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"]; //untuk username
$password=$_POST["password"]; //untuk password digunakan enskripsi md5
$email=$_POST["email"]; //untuk email
$status=$_POST["status"]; // untuk status user/admin biar jelas gk kek hubungan kita

//Menginput data ke tabel
  $result=mysqli_query($connect, "INSERT INTO user (username,password,email,status) VALUES('$username','$password','$email','$status')");

//Kondisi apakah berhasil atau tidak
  if ($result) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='login.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='daftar.php';
		  </script>";
  }

?>