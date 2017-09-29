<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="css/add_user.css" />
    <title>add_akun</title>
  </head>
  <body>
    <div id="form"><form action="php/add_user.php" method="post">
      <div class="heading">
        ~Register~
      </div>
      <div class="">
        <center> <input class="input" type=text name="userreg" placeholder="Username" required> </center>
      </div>
      <div class="">
        <center> <input class="input" type="password" name="paswreg" placeholder="Password" required> </center>
      </div>
      <div class="" style="margin-top:20px;"><center>
        <input class="button" type="submit" name="register" value="SUBMIT">
        <input class="button" type="reset" name="name" value="RESET">
      </center></div>
    </form></div>
  </body>
</html>
