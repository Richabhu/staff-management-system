<?php
session_start();
	require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>

<body style="background-color:#95a5a6";/>
	
	<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <td valign="top" align="left" background="img/b.jpeg" style="background-repeat:no-repeat; background-size:cover;height:750px;"> 
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
		<a href="work.php"><input style="font-weight:bold" type="button" value="WORKS-ON" name="wor" id="btnn"/></a></div>
		<div class="col-xs-2">
		<a href="index.php"><input style="font-weight:bold" type="button" value="LOGOUT" id="btnn"/></a>
		</div>
	</center>
	</div>
	
	</div>
	
	</div>
	<div class="container">
	<h1 style="color:white;"><b>DELETE PROJECT INFO</b></h1>
	<?php
	$a='';
		$sql="select * from project where ssn='$a'";
		$res=$con->query($sql);
		?>
		<html>
	
			<form class="loginform" action="delpro.php" method="post">
		
			<button class="btn btn-success btn-danger" type="submit" name="del" value="delete">delete</button></form>
			<?php
			$xx=$_SESSION['pno'];
			?>
	<?php		
			
			if(isset($_POST['del']))
			{
				$sqlll="delete from project where pno='$xx'";
				$con->query($sqlll);
				echo '<meta http-equi="referesh" content="0.1; URL=employee.php">';
				echo '<script type="text/javascript"> alert("'.$xx.' deleted") </script>';
				
			}
			
	?>
	</html>
	</div>
		