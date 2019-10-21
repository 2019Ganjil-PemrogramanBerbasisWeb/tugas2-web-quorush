<?php
//akitfkan session php

//hubungkan dengan koneksi
include 'connect.php';

//mengambil data di form
$username = $_POST['username'];
$password = $_POST['password'];

//seleksi dengan data yang sesuai
$data = mysqli_query($link, " SELECT * FROM datas WHERE name='$username' AND password='$password'");

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
  echo $username.$password;
//header("location:log.php?pesan=gagal");
}
?>
