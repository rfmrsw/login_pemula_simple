<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link type="text/css" rel="stylesheet" media="screen" charset="utf-8" href="css/login.css" />
  </head>
  <body id="background">
    <div id="bg-trnsprnt"><form action="php/login.php" name="login" method="post">
      <div class="subheading">
        <center>~ LOG IN ~</center>
      </div>
      <div class="">
        <center> <input class="input" type="text" name="userlog" placeholder="Username" /> </center>
      </div>
      <div class="">
        <center> <input class="input" type="password" name="paswlog" placeholder="Password" /> </center>
      </div>
      <div class="">
        <center> <input id="login" type="submit" name="login" value="Login" /> </center>
      </div>
      <div class="">
        <center>
          <span style="position:relative; right:100px;"><input type="checkbox" name="remember" checked /> <span style="color:#fff;">Remember me</span></span>
          <span style="position:relative; left:100px; text-decoration:underline; cursor:pointer;"><a href="register.php">Bikin Akun Baru</a></span>
        </center>
      </div>
    </form></div>
  </body>
</html>
