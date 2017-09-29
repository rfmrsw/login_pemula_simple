<?php
  include ('../koneksi/koneksi.php');
  session_start();

  $username = isset($_POST['userlog']) ? $_POST['userlog'] : null;
  $password = isset($_POST['paswlog']) ? $_POST['paswlog'] : null;

  $_SESSION['userlog'] = $username;
  $user = $_SESSION['userlog'];

  $sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
  $query = mysqli_query($koneksi, $sql);
  $check = mysqli_fetch_assoc($query);

  if(is_array($check) && !empty($check)){
    echo "<script>confirm('Selamat Datang $user !')</script>";
    header('location:../home.php');
  } else{
    echo "<script>confirm('Silahkan Login Kembali !')</script>";
    echo "<meta http-equiv='refresh' content='1 url=../index.php' />";
  }

  include('../koneksi/close.php');
?>
