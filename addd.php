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
    <td valign="top" align="left" background="img/h.jpeg" style="background-repeat:no-repeat; background-size:cover;height:650px;"> 

<div class="container"><br><br>
<form method="post"  action="addd.php">
<center>
<h1 style="color:black;"><b>ADD DEPARTMENT DETAILS</b></h1><br><br>
</center>
<div>
<center>
<label><b>Department No:</b></label><br>
<input type="text" placeholder="dno" name="dno" required/><br>
<label><b>Department Name:</b></label><br>
<input type="text" placeholder="dname" name="dname" required/><br>
<!--<label><b>Manager Start Date:</b></label>
<input type="text" class="form-control" placeholder="department timings" name="dtime" required/><br> -->
<br>
<input name="submit" type="submit"  value="SAVE"/><br><br>
	<a href="department.php"><input style="font-weight:bold;background-color:blue" type="button" value="CLICK TO GO back" name="dep"/></a>

</center>

<?php
		if(isset($_POST['submit']))
		{
			
			$dno=$_POST['dno'];
			$dname=$_POST['dname'];
			//$MgrStartDate=$_POST['MgrStartDate'];
			//$address=$_POST['address'];
			//$salary=$_POST['salary'];
			//$superssn=$_POST['superssn'];
			//$dno=$_POST['dno'];
			
				$query="select * from department where dno='$dno'";
				
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("department  already exists .. Try again") </script>';
				}
				else
				{
					$query="insert into department values('$dno','$dname')";
					
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