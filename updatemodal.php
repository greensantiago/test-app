



<!--UPDATE MODAL-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="updatemodal<?php echo $rowID;?>">
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
								 	<label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
									<label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
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
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Update</button>
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      	</div>
        		</form>
        	</div>
        </div>

       
      
    </div>
  </div>
</div>
