<?php 

$servername= "localhost";
$dbUsername= "root";
$dbPassword= "";
$dbName="fuuls_basha";

$conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $c_pass = $_POST['con_password'];

    $sel_email = "SELECT * FROM user_info WHERE Email = '$email'";

    $result = mysqli_query($conn, $sel_email);
    $row = mysqli_fetch_array($result);
    if ($row['Email'] == $email){
    	$insert = "UPDATE user_info SET Password = '$password' WHERE Email = '$email'";
    	mysqli_query($conn, $insert);
    	header('location: test.html');
    }
}

?>