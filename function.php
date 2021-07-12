<?php
	
	function showdetails($standard,$rollno)
	{
		include('dbcon.php');

		$sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `rollno`='$rollno'";

		$run=mysqli_query($con,$sql);

		if(mysqli_num_rows($run)>0)
		{
			$data=mysqli_fetch_assoc($run);
			?>
				<table border="2" align="center" style="width: 70%; margin-top: 20px; ">
					<tr>
						<th colspan="3" bgcolor="greenyellow">Students Details</th>
					</tr>
					<tr>
						<td rowspan="5"  align="center"><img src="dataimg/<?php echo $data['image'];  ?>" style="max-width: 120px;max-height: 150px;"> </td>
						<th bgcolor="greenyellow">Roll No.</th>
						<td><?php echo $data['rollno']; ?></td>
					</tr>
					<tr>
						<th bgcolor="greenyellow">Name</th>
						<td><?php echo $data['name']; ?></td>
					</tr>
					<tr>
						<th bgcolor="greenyellow">Standard</th>
						<td><?php echo $data['standard']; ?></td>
					</tr>
					<tr>
						<th bgcolor="greenyellow">Parent Contact No</th>
						<td><?php echo $data['pcont']; ?></td>
					</tr>
					<tr>
						<th bgcolor="greenyellow">City</th>
						<td><?php echo $data['city']; ?></td>
					</tr>
				</table>
			<?php
		}
		else
		{
			echo "<script>alert('No Student Found');</script>";
		}
	}

?>