<?php 
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,"staff");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script></head>
<body>
<table height="100%" width="100% cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td valign="top" allign="left" background="img/o.jpeg" style="background-repeat:no-repeat; background-size:100% 100%;height:650px"> 
<!--<div style="background-color:#7bceeb;">

	<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left" background="img/register.png" style="background-repeat:no-repeat; background-size:cover;"> 
-->


<div class="container">
<form class="formstyle1" method="post" action="adde.php">
<center>
<br><br><br><br>
<h3>Add Employee details</h3><br><br><br><br>
<label><b>SSN:</b></label>
<input type="text" placeholder="ssn" name="ssn" value="aaa" required/><br>
<label><b>NAME:</b></label>
<input type="text" placeholder="name" name="name" required/><br>
<label><b>SEX:</b></label>
<input type="text" placeholder="sex" name="sexx" required/><br>
<label><b>ADDRESS:</b></label>
<textarea placeholder="address" name="address" required/></textarea><br>
<label><b>SALARY:</b></label>
<input type="text" placeholder="salary" name="salary"required/><br>
<!--<input type="text" class="form-control" placeholder="super ssn" name="superssn"/><br>-->
<!--<input type="text" class="form-control" placeholder="department no" name="dno" required/><br> -->
<label><b>Enter department no:</b></label>
<label><input type="radio" name="indoor-outdoor" value="1"> 1-Finance</label>
  <label><input type="radio" name="indoor-outdoor" value="2">2-Technical</label>
    <label><input type="radio" name="indoor-outdoor" value="3">3-Non Technical</label>
  <label><input type="radio" name="indoor-outdoor" value="4"> 4-Sales</label>
  <label><input type="radio" name="indoor-outdoor" value="5"> 5-Human&Resource</label><br>
<input name="submit" type="submit" value="SAVE"/><br>
<a href="home.php"><input style="font-weight:bold;background-color:blue" type="button" value="CLICK TO GO HOME" name="hom"/></a>
<br><br><br><br><br><br><br>
</form>

<?php
		if(isset($_POST['submit']))
		{
			
			$ssn=$_POST['ssn'];
			$name=$_POST['name'];
			$sexx=$_POST['sexx'];
			$address=$_POST['address'];
			$salary=$_POST['salary'];
			//$superssn=$_POST['superssn'];
			//$dno=$_POST['dno'];
			$x=$_POST['indoor-outdoor'];
			//echo $x;
				$query="select * from employee where ssn='$ssn'";
				
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("Employee already exists .. Try again") </script>';
				}
				else
				{
					if($x==4)
					{
						$query="insert into employee values('$ssn','$name','$address','$sexx',bonus($salary),'$x')";
					}
					else{
						$query="insert into employee values('$ssn','$name','$address','$sexx',$salary,'$x')";
					}
					
					
					$querr=mysqli_query($con,$query);
		
				if($querr)
				{
					echo '<script type="text/javascript"> alert("Employee added") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("error") </script>';
				}
				
				}
				
			
		
		}
	?>
 	
	
	</div>
	</div>
</body>
</html>