<?php 
session_start();
if (empty($_SESSION['admin']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard - HMS</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
    <style>
       .total{
		height: 120px;
		width: 170px;
		border: 1px solid rgba(24, 85, 123, 0.75);
		margin-top: 25px;
		margin-left: 40px;
		float: left;
		text-align: center;
		padding-top: 20px;
        border-radius: 10px;
	}
    </style>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right">
			<div class="total">
				<b>Total Receptionist</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `users` WHERE `type`='Reception'";
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:rgba(24, 85, 123, 0.75); font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total Doctors</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `users` WHERE `type`='NormalDoctor' OR `type`='DentalDoctor' OR `type`='WomenDoctor'";
				
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:rgba(24, 85, 123, 0.75); font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total Laboratorist</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `users` WHERE `type`='Laboratory'";
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:rgba(24, 85, 123, 0.75); font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>";
				 ?>
			</div><br><br>
			<div class="total">
				<b>Total Admins</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `users` WHERE `type`='Admin'";
				
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:rgba(24, 85, 123, 0.75); font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total Pharmatist</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `users` WHERE `type`='Pharmacy'";
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:rgba(24, 85, 123, 0.75); font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>";
				 ?>
			</div>

			<div class="total">
				<b>Total Bursar</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM `users` WHERE `type`='Bursar'";
				$query = mysqli_query($con,$sql);
				echo "<br><b style='color:rgba(24, 85, 123, 0.75); font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>";
				 ?>
			</div>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>