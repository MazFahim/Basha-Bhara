<?php
  session_start();

  //db connection
 $servername= "localhost";
 $dbUsername= "root";
 $dbPassword= "";
 $dbName="fuuls_basha";

 $conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

 if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
 }
  //signup
  if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    
    $select = "SELECT * FROM user_info WHERE Name = '$username'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    if ($row['Name'] != $username) {
      $insert = "INSERT INTO user_info (Name, Password, Email, Address, Phone) VALUES ('$username', '$password', '$email', '$address', '$phone')";
      mysqli_query($conn, $insert);
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

    $select = "SELECT * FROM user_info WHERE Name = '$username' && Password = '$password'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    if ($row['Name'] == $username) {
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
