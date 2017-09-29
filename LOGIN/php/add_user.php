<?php
  include('../koneksi/koneksi.php');

  $username = $_POST['userreg'];
  $password = $_POST['paswreg'];

  // MENAMBAHKAN AKUN KE PHPMYADMIN
  $sql = "INSERT INTO login (`username`, `password`) VALUES ('$username', '$password')";
  $query = mysqli_query($koneksi, $sql);

  // MENGECEK APAKAH PENAMBAHAN AKUN BERHASIL?
  if($query){
    echo "<script>confirm('Data Anda Sedang Di Proses !')</script>";
    echo "<script>window.location.href='../index.php'</script>";
  } else{
    echo "<script>confirm('Data Anda Tidak Bisa Diproses, Silahkan Coba Lagi !')</script>";
    echo "<meta http-equiv='refresh' content='1 url=../register.php' />";
  }

  include('../koneksi/close.php');
?>
