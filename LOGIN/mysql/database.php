<?php
  include('../koneksi/koneksi.php');

  // MEMBUAT DATABASE LATIHAN
  mysqli_query($koneksi, "CREATE DATABASE latihan");
?>
