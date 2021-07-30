<?php 
	 if (isset($_SESSION['username'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Input</title>
			<style type="text/css">
				section{
					margin-left: 55px;
					float: left;
				}
				#fea.items{
					width: 24.5%;
				    height: 33%;
				    background: whitesmoke;
				    text-align: center;
				    display: inline-block;
				}
				.items img{
				    width: 45%;
				    height: 55%;
				    padding: 22px 0;
				}
			</style>
		</head>
		<body>
			<header>
				<center>
					<h1>BashaBhara.com</h1>
				</center>
			</header>
			<h3>**You should enter at least 1 picture of every room of your home</h3>
			<br>
			<section>
				<form>
					<label>Enter the number of bedrooms in your house:</label>
					<input type="number" name="room_no" min="1"><br><br>
					<label>Enter the number of bathrooms in your house:</label>
					<input type="number" name="bath_no" min="1"><br><br>
					<label>Enter the number of balconies in your house:</label>
					<input type="number" name="bath_no" min="0"><br>
					<p>Enter the address of your house:</p>
					<textarea name="address" rows="6" cols="50"></textarea>
				</form>
			</section>
			<section id="fea">
				<div class="item">
					<img src="feature/cctv.png">
				</div>
				<div class="item">
					<img src="feature/m.png">
				</div>
			</section>
		</body>
		</html>
	<?php 
	}
 ?>