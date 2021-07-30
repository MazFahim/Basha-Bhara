<?php
  session_start();

  //db connection
 $servername= "localhost";
 $dbUsername= "root";
 $dbPassword= "";
// $dbName="fuuls_basha";

$conn=mysqli_connect($servername,$dbUsername,$dbPassword,/*$dbName*/);

 if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
 }
 $sql = "CREATE DATABASE basha-bhara";
 if ($conn->query($sql) === TRUE) {
   echo "Database created successfully";
 } else {
   echo "Error creating database: " . $conn->error;
 }
 
 $conn->close();

?>
