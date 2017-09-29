<?php
  session_start();
  $user = $_SESSION['userlog'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
  </head>
  <body>
    <?php echo 'Selamat Datang '.$user; ?><br>
    <a href="php/logout.php">Mau Logout?</a>
  </body>
</html>
