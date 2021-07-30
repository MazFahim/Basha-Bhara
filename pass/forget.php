<?php include('pass.php'); ?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="signup.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">


  <title> sign-up-form </title>
</head>
<body>

  <form action="forget.php" method="post">
  <center>
      <div class="login-box">
        <h1>Reset Password</h1>
        
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="Email" placeholder="Email" name="email" value="" required>
        </div>
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="Password" placeholder="New Password" name="password" value="" required>
        </div>
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="Password" placeholder="Confirm Password" name="con_password" value="" required>
        </div>

        <input class="btn" type="submit" name="submit" value="Submit">

      </div>
  </center>
  </form>

</body>
</html>
