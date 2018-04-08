<?php
	include 'db_connection.php';
	include 'createmodal.php';
	

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/styling.css">

    <title>PHP Calculator</title>

</head>

<body>
	<div class="title">
        <h3 id = "title">PHP Test Application</h3>
    </div>
    <div>
    	<button type="button" class="btn btn-success" data-toggle="modal" data-target=".CreateModal">Add</button>
    </div>

    <div class="table-responsive">
    	<table class="table table-striped table-hover table-condensed">
    		<thead>
    			<tr>
    				
    				<th>First Name</th>
	    			<th>Last Name</th>
	    			<th>Date of Birth</th>
	    			<th>Gender</th>
	    			<th>Job Title</th>
	    			<th>Date Employed</th>
	    			<th>Action</th>
    			</tr>
    		</thead>

    		<tbody>
    			<?php

    				$sql = "SELECT * FROM tblemployee;";
    				$result = mysqli_query($con,$sql);
    				$i=1;
					while ($row = mysqli_fetch_array($result)) {
				?>
				<tr>
					<?php $rowID = $row['id']; ?>
					
					<td><?php echo $row['first_name']?></td>
	    			<td><?php echo $row['last_name'] ?></td>
	    			<td><?php echo $row['date_of_birth']; ?></td>
	    			<td><?php echo $row['gender']; ?></td>
	    			<td><?php echo $row['job_title']; ?></td>
	    			<td><?php echo $row['date_employed']; ?></td>
	    			<td>
	    				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatemodal<?php echo $rowID; ?>">Update</button>
	    				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletemodal<?php echo $rowID; ?>">Delete</button>
	    				<?php include 'updatemodal.php'; ?>
	    			</td>
	    			
				</tr>    		
				<?php } ?>	
    		</tbody>
    	</table>
    </div>
    
</body>

</html>