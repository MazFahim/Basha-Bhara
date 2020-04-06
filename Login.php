<?php
   include('server.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/login.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">


    <title> abcd </title>
  </head>
  <body>
    <form action="Login.php" method="post">
    <div class="login-box">
    <h1>SIGN IN</h1>
      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="username" value="">
      </div>

      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="password" value="">
      </div>

    <input class="btn" type="submit" name="signin" value="Sign In">
      <div class="bottom-text">
        <input type="checkbox" name="checked" checked="checked"><p>Remember me</p>
        <a href="#">Forgot password</a>
      </div>

    <hr>
      <p> Not a member yet? </p><a href="Signup.php">Signup Here</a>

  </div>
  </form>

  </body>
</html>
