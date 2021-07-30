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
	//image portion starts here
	$target = "feature/".basename($_FILES['image']['name']);//path to store the uploaded images
	$image = $_FILES['image']['name'];//get the submitted data from the form


	//information about the house starts heref
	$floor_no=$_POST['floor_no'];
	$room_no=$_POST['room_no'];
	$bath_no=$_POST['bath_no'];
	$balconi_no=$_POST['balc_no'];
	$h_name=$_POST['h_name'];
	$city=$_POST['city'];
	$area=$_POST['area'];
	$block=$_POST['block'];
	$road=$_POST['road'];
	$chkbox=$_POST['feature'];//checkbox input portion starts here
	$chk="";  
    foreach($chkbox as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  
       //checkbox input portion ends here

    $insert = "INSERT INTO details (floor_number, bed_number, bath_number, balcony_number, house_name, City, Area, Block, Road, feature, image) VALUES ('$floor_no', '$room_no', '$bath_no', '$balconi_no', '$h_name', '$city', '$area', '$block', '$road', '$chk', '$image')";
    mysqli_query($conn, $insert);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    	$msg = "Image uploaded successfully";
    }
    else{
    	$msg = "There was a problem uploading the image";
    }
  

	header('location: feature.html');
}

?>