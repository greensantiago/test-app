<!--PHP CODE FOR INSERT-->
<?php
	include 'db_connection.php';

	if (isset($_POST['submit'])) {
		$firstname = (isset($_POST['firstname']) ? $_POST['firstname'] : null);
		$lastname = (isset($_POST['lastname']) ? $_POST['lastname'] : null);
		$birthdate = (isset($_POST['birthdate']) ? $_POST['birthdate'] : null);
		$gender = (isset($_POST['gender']) ? $_POST['gender'] : null);
		$jobtitle = (isset($_POST['jobtitle']) ? $_POST['jobtitle'] : null);
		$dateemployed = (isset($_POST['dateemployed']) ? $_POST['dateemployed'] : null);

		$qry = "INSERT INTO `tblemployee` (first_name, last_name, date_of_birth, gender, job_title, date_employed) VALUES ('$firstname','$lastname','$birthdate','$gender','$jobtitle','$dateemployed');";

		if ($con->query($qry) === TRUE) {
		    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				  <strong>Success!</strong> New data was succefully added.
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
		} else {
		   echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				  <strong>Error!</strong> Unsuccessful in adding data to the database." . mysqli_error($con) ."
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
		}

		
	}


?>
	

<!--Create Modal-->

<div class="modal fade CreateModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	 <div class="modal-header">
        	<h4 class="modal-title">Add Data</h4>
          	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
        </div>

        <div class="modal-body">
        	<div class="container-fluid">
        		<form method="POST" role="form">
        			<div class="form-group">
        				<div class="row">
        					<div class="col-md-6">
		        				<label class="control-label">First Name:</label>
		        				<input type="text" name="firstname" class="form-control" required="" maxlength="30">
		        			</div>
		        			<div class="col-md-6">
		        				<label class="control-label">Last Name:</label>
		        				<input type="text" name="lastname" class="form-control" required="" maxlength="30">
		        			</div>

        				</div>

        				<div class="row">
        					<div class="col-md-6">
		        				<label class="control-label">Date of Birth:</label>
		        				<input type="date" name="birthdate" class="form-control" required="">
		        			</div>
		        			<div class="col-md-6">
		        				<label class="control-label">Gender: </label>
		        				<div class="radio">
								 	<label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
									<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
								</div>
		        			</div>

        				</div>

        				<div class="row">
        					<div class="col-md-6">
		        				<label class="control-label">Job Title:</label>
		        				<input type="text" name="jobtitle" class="form-control" required="" maxlength="30">
		        			</div>
		        			<div class="col-md-6">
		        				<label class="control-label">Date Employed:</label>
		        				<input type="date" name="dateemployed" class="form-control" required="">
		        			</div>

        				</div>

        			</div>
        			 <div class="modal-footer">
        			 	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      	</div>
        		</form>
        	</div>
        </div>

       
      
    </div>
  </div>
</div>
