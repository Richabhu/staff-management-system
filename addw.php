<?php 
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,"staff");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Department</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script></head>
<body background="bck.jpg">
<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <td valign="top" align="left" background="img/j.jpeg" style="background-repeat:no-repeat; background-size:cover;height:650px;"> 
<center>

<div class="container">
<form method="post"  action="addw.php">
<h1 style="color:black;"><b>ADD WORKING DETAILS</b></h1>
<br><br><br>

<div>
<label><h3 style="color:black;"><b>SSN:NO</b></h3></label>
<input type="text" placeholder="enter ssn" name="ssn" required/><br><br>
<label><h3 style="color:black;"><b>PROJECT-NO:</b></h3></label>
<input type="text" placeholder="project-NO" name="pno" required/><br><br>
<label><h3 style="color:black;"><b>ProjeCT Hours:</b></h3></label>
<input type="text" placeholder="project hours" name="phrs" required/><br><br>

<input name="submit" type="submit" value="SAVE"/><br><br>
	<a href="work.php"><input style="font-weight:bold;background-color:blue" type="button" value="CLICK TO GO back" name="wor"/></a>

</center>
	
	
	<?php
		if(isset($_POST['submit']))
		{
			
			$ssn=$_POST['ssn'];
			$pno=$_POST['pno'];
			$phrs=$_POST['phrs'];
			
				$query="select * from workson where ssn='$ssn' and pno='$pno'";
				
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("ssn  already exists .. Try again") </script>';
				}
				else
				{
					$query="insert into workson values('$ssn',$phrs,$pno)";
					
					$querr=mysqli_query($con,$query);
		
				if($querr)
				{
					echo '<script type="text/javascript"> alert("details added") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("error") </script>';
				}
				
				}
				
			
		
		}
	?>
	
	
</div>