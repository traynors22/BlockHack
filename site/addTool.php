 <?php
include("header.php"); 
include("navBar.php"); 
?>

<div class="container ">
	<div class="row ">
      <div class="col-md-6 col-md-offset-3 ">
        <div class="well well-sm userbk">
          <form class="form-horizontal " action="" method="post">
      
            <legend class="text-center">Add Projects</legend>
    
            <!-- Name input-->
            <div class="form-group ">
              <label class="col-md-3 control-label" for="name">Project Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="project name" class="form-control">
              </div>
            </div>
     <div class="form-group ">
              <label class="col-md-3 control-label" for="Cost">Project Budget</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="amount" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your description here here..." rows="5"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Category</label>
              <div class="col-md-9">
                <select title="Select tool category" name="category">
						<option value="Build a School" selected>
						Build a School</option>
						<option value="Build a Well">
						Build a Well</option>
						<option value="Teaching">
						Teaching</option>
						<option value="Aid Relief">
						Aid Relief</option>
						<option value="Coding in schools">
						Coding in schools</option>
						<option value="Earthquake relief">
						Earthquake relief</option>
						<option value="Elderly care">
						Elderly care</option>
					</select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Image:</label>
              <div class="col-md-9">
               <img src="img/noimage.jpg">
              </div>
            </div>

             <div class="form-group">
              <label class="col-md-3 control-label" for="message">Upload:</label>
              <div class="col-md-9">
               <input type="file" name="files[]" id="js-upload-files" multiple>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
        <a href="addToolConfirmation.php" type="submit" class="btn btn-primary">Add Project</a>
              </div>
            </div>
          
          </form>
        </div>
      </div>
	</div>
</div>


 <?php
 include("footer.php");
 ?>