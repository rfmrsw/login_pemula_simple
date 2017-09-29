<?php
  include('../koneksi/koneksi.php');

  // MEMBUAT TABLE LOGIN
  $sql = mysqli_query($koneksi, "CREATE TABLE login (`id` INT NOT NULL AUTO_INCREMENT, `username` CHAR(12) NOT NULL, `password` CHAR(12) NOT NULL, PRIMARY KEY(`id`)) ENGINE = InnoDB");
  if($sql){
    echo 'Benar';
  } else{
    die(mysqli_error($koneksi));
  }
?>
