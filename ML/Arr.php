<?php
 $servername= "localhost";
 $dbUsername= "root";
 $dbPassword= "";
 $dbName="fuuls_basha";

 $conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

 if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
 }

$select = "SELECT * FROM user_info";
$result = mysqli_query($conn, $select);	

while($row = $result->fetch_array())
{
$rows[] = $row;
}

foreach($rows as $row)
{
echo $row['Name'];
}

/* free result set */
$result->close();

/* close connection */
$conn->close();
?>