<?php
session_start();
	require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Department Location Page</title>
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>

<body>
<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <td valign="top" align="left" background="img/xx.jpeg" style="background-repeat:no-repeat; background-size:cover;height:650px;"> 

	
	
	<div class="container">
	
	<div style="height:90px;margin:50px">
	
	<div style="margin-top:40px>
	<div class="row">
	<center>
	<div class= "col-xs-2">
		<a href="home.php"><input style="font-weight:bold" type="button" value="HOME" name="hom" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="employee.php"><input style="font-weight:bold" type="button" value="EMPLOYEE" name="emp" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="department.php"><input style="font-weight:bold" type="button" value="DEPARTMENT" name="dep" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="dlocation.php"><input style="font-weight:bold" type="button" value="DLOCATION" name="loc" id="btnn"/></a></div>
		<div class="col-xs-2">
		<a href="project.php"><input style="font-weight:bold" type="button" value="PROJECT" name="pro" id="btnn"/></a></div>
		<div class="col-xs-2">
		<a href="work.php"><input style="font-weight:bold" type="button" value="WORKS-ON" name="wor" id="btnn"/></a></div><br><br>
		<div class="col-xs-2">
		<a href="index.php"><input style="font-weight:bold" class="btn btn-danger" type="button" value="LOGOUT" id="btnn"/></a>
		</div>
	</center>
	</div>
	
	</div>
	
	
	
	
	<div>
	
	<a href="adddloc.php"><input  style="font-weight:bold" type="button" name="adde" value="ADD DEPARTMENT LOCATION" id="bto"/></a>
	<center>
	<h1 style="color:black;"><b>DEPARTMENT LOCATION DETAILS</b></h1>
	</center>
	<table class="table table-responsive" border="2" style="border-color:black; background-color:white">
		<tr>
			<th>slno</th>
			<th>dno</th>
			<th>dlocation</th>
			<th>edit</th>
			<th>delete</th>
			
		</tr>
		<?php
		if(isset($_POST['san'])){
			$_SESSION['dno']=$_POST['san'];
			header('Location: ./editdloc.php');
		}
		
		if(isset($_POST['pan'])){
			$_SESSION['dno']=$_POST['pan'];
			header('Location: ./deldloc.php');
		}
		$query="select * from dlocation";
		$res=$con->query($query);
		$i=1;
		while($row=$res->fetch_assoc())
		{
			$dno=$row['dno'];
			$dname=$row['dloc'];
			
			echo '<tr>
			<td>'.$i.'</td>
			<td>'.$dno.'</td>
			<td>'.$dname.'</td>
			<td><form method="POST" action="dlocation.php"><input type="submit" value="'.$dno.'" class="btn btn-info btn-xs" name="san"/></form></td>
			<td><form method="POST" action="dlocation.php"><input type="submit" value="'.$dno.'" class="btn btn-danger btn-xs" name="pan"/></form></td>
			</tr>';$i++;
		}
?>
	</div>
	
	<?php
	
	?>
	</div>
</body>