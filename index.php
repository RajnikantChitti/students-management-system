<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
</head>
<body>

	<h3 align="right" style="margin-right: 20px;" ><a href="login.php">Admin Login</a></h3>
	<h1 align="center">Welcome to Student Management System</h1>
	
	<form action="index.php" method="post">
		<table align="center" border="1" style="width: 25%";>
			<tr>
				<td colspan="2" align="center"><b>Student Information</b></td>
			</tr>
			<tr>
				<td align="left"><b>Choose Standard</b></td>
				<td align="left">
					<select name="std">
						<option value="1">1st</option>
						<option value="2">2nd</option>
						<option value="3">3rd</option>
						<option value="4">4th</option>
						<option value="5">5th</option>
						<option value="6">6th</option>
						<option value="7">7th</option>
						<option value="8">8th</option>
						<option value="9">9th</option>
						<option value="10">10th</option>
						<option value="11">11th</option>
						<option value="12">12th</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="left"><b>Enter Roll no.</b></td>
				<td align="left"><input type="text" name="rollno" required=""></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Show Information"></td>
			</tr>
		</table>
	</form>

</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$standard = $_POST['std'];
		$rollno = $_POST['rollno'];

		include('dbcon.php');
		include('function.php');

		showdetails($standard,$rollno);

	}
?>








