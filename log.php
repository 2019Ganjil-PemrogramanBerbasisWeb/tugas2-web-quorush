<?php
//akitfkan session php
error_reporting(0);
//hubungkan dengan koneksi
include 'connect.php';

//mengambil data di form
$username = $_POST['username'];
$password = md5($_POST['password']);

//seleksi dengan data yang sesuai
$data = mysqli_query($conn, "SELECT * FROM datas WHERE username='$username' AND password='$password'");

//hitung data
$cek = mysqli_num_rows($data);

if($cek > 0)
{
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "Login";
  foreach ($data as $getData) {
    $_SESSION['username'] = $getData['username'];
    $_SESSION['name'] = $getData['name'];
    $_SESSION['balance'] = $getData['balance'];
}
  setcookie("mesage", "delete", time()-1); //hapus pesan setcookie
  header("location:index.php");
}
else {
  header("location:index.php?pesan=gagal");
}
?>