<?php
//akitfkan session php

//hubungkan dengan koneksi
include 'conn.php';

//mengambil data di form
$username = $_POST['username'];
$password = $_POST['password'];

//memeriksa data 

//seleksi dengan data yang sesuai
$data = mysqli_query($link, " SELECT * FROM users WHERE username='$username' AND password='$password'");

//hitung data
$cek = mysqli_num_rows($data);

if($cek > 0)
{
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "Login";

  setcookie("mesage", "delete", time()-1); //hapus pesan setcookie
  header("location:index.php");
}
else {
  echo '<p>Data yang Anda Masukkan Salah</p><br><a href="login.php">Kembali</a>'; 
}
?>
