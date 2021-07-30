<?php include('server.php'); ?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">


  <title> sign-up-form </title>
</head>
<body>

  <form action="Signup.php" method="post">
  <center>
      <div class="login-box">
        <h1>SIGN UP</h1>
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="text" placeholder="Full Name" name="username" value="" required>
        </div>
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="Email" placeholder="Email" name="email" value="" required>
        </div>
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="Phone" placeholder="Phone Number" name="phone" value="" required>
        </div>
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="Address" placeholder="Address" name="address" value="" required>
        </div>
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="Password" placeholder="Password" name="password" value="" required>
        </div>
        <div class="textbox">
          <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
          <input type="Password" placeholder="Confirm Password" name="password" value="" required>
        </div>

        <p><span><input type="checkbox" </span> I agree to the terms of services </p>

        <input class="btn" type="submit" name="signup" value="Sign Up">

        <hr>
          <p> Already have an account? </p><a href="Login.php">Login Here</a>

      </div>
  </center>
  </form>

</body>
</html>
