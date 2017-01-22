 <?php
include("header.php"); 
include("navBar.php");
?>
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script language="JavaScript" type="text/javascript" src="js/jquery.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
  });
  </script>
</head>

<div class="container">
	<div class="col-md-6 col-md-offset-3">	
		<div class="panel panel-default">
			<div class="panel-heading"><h1>Papua New Guinea Well Building</h1></div>
	    	<div class="panel-body">
				<img src="">
				<h5>Average User Rating 4/5</h5>
                <p>       <strong>Category:</strong> New Building</br>
                          <strong>Description:</strong> 
                          New Well to provide people to the towns people</br>
                          <strong>Budget Target:</strong> £5000 </p>
                          <h5>Project Owner: J Smith</h5>
                          <button  type="button" class="btn btn-info" data-toggle = "modal" data-target = "#messageModal">Message Them</button>
                          <br><br>

	     	  <div class="form-group">
		           <div class="input-group">
		       <input type="text" class="form-control" aria-label="..." placeholder="Amount">
			      <div class="input-group-btn">
		    

	     	    <a href="mybasket.php"><button type="button" class="btn btn-lg btn-primary">Contribute to Project</button></a>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading"><h3>Reviews</h3></div>
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Really well run project</h4><h5>Rating: 4/5 - User: Dave D</h5></div>
						<div class="panel-body">
						<p>This is for a great cause.</p>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Good project</h4><h5>Rating: 5/5 - User: Hannah R</h5></div>
						<div class="panel-body">
						<p>This project is doing a great deal to help</p>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading"><h4>very satisfied</h4><h5>Rating: 5/5 - User: Pete A</h5></div>
						<div class="panel-body">
						<p>This website is really good at providing help to all</p>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>


<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="rejectModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Message</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
					<p>Send <b class = "user">J Smith</b> a message:</p>
					<form style="padding-top:10px;" class="form-horizontal" role="form">
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Message Content:</label>
							<div style="padding-top:10px;" class="col-lg-7">
								 <textarea rows="4" cols="40"></textarea> 
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" id = "hide" class="btn btn-success" onclick="hide()" data-dismiss="modal">Send</button>
			</div>
		</div>
	</div>
</div>

 <?php
 include("footer.php");
 ?>