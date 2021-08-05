<?php

  //db connection
 $servername= "localhost";
 $dbUsername= "root";
 $dbPassword= "";
$dbName="bashabhara";

$conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

 if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
 }
 $sql = "CREATE TABLE IF NOT EXISTS accounts(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user VARCHAR(30) NOT NULL,
  pass VARCHAR(15) NOT NULL,
  phone VARCHAR(15) NOT NULL,
  email VARCHAR(20) NOT NULL
)";
if(mysqli_query($conn, $sql) == TRUE){
  echo "Table created successfully.";
} else{
  echo "ERROR: ". mysqli_error($conn);
}
 $conn->close();

?>
