<?php
  // MENGHAPUS SESSION USERNAME;
  session_start();
  $user = $_SESSION['userlog'];

  if(isset($user)){
    session_destroy();
    header('location:../index.php');
    echo "<meta http-equiv='refresh' content='1 url=../index.php' />";
  }
?>
