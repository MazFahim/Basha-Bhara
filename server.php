<?php
  session_start();

  //db connection
  $db = mysqli_connect("localhost", "root", "");
  mysqli_select_db($db, "basha_bhara");
  //signup
  if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $select = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($db, $select);
    $row = mysqli_fetch_array($result);
    if ($row['username'] != $username) {
      $insert = "INSERT INTO users (username, password, email, address, phone, gender) VALUES ('$username', '$password', '$email', '$address', '$phone', '$gender')";
      mysqli_query($db, $insert);
      ?>
        <script type="text/javascript">
          alert("record inserted successfully");

        </script>
      <?php
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');

    }
    else {
      ?>
        <script type="text/javascript">
          alert("This username already exist please choose another one");
        </script>
      <?php
    }
  }

  //Login
  if(isset($_POST['signin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($db, $select);
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }
    else {
      ?>
        <script type="text/javascript">
          alert("Incorrect username/password");

        </script>
      <?php
    }
  }

?>
