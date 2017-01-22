	<?php
			include("header.php"); 
			include("navbar.php")
			?>

<script src="jquery-ui/jquery-ui.js">
$('#date').datepicker({});
 </script>

 <script type="text/javascript">
 $(".test1").click(function(){

      $("#alltools").text($(this).text());
      $('#searchtool').attr("placeholder",$(this).text());

   });

  $(".test").click(function(){

      $("#within").text($(this).text());

   });

</script>


			<div class="jumbotron">
				    <div align="center">
				 		    <span><h1 style="color:white">Project Timber</h1><h4 style="color:white"> - Do your bit to help out</h4></span>
					    <br>
					    <a href="addTool.php">
						<button type="button" class="btn btn-lg btn-info">Add a new Project</button>
						</a>
					</div>
				</div>
					<br>
					<div class="indexBackground">
						<div class="row row2" align="center">
						
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/school_building.jpeg" style="width:200px;height:200px" alt="...">Build a School: (1,566) 
							</a>
							</div>
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/wellproject.jpeg" style="width:200px;height:200px" alt="...">Build a School:(567) 
							</a>
							</div>

							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/earthquake.jpeg"  style="width:200px;height:200px" alt="...">Earthquake Relief: (683)
							</a>
							</div>

						</div>
							
						<div class="row row2" align="center">
						
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/tsunami.jpeg" style="width:200px;height:200px" alt="...">Tsunami Relief: (788) 
							</a>
							</div>
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/aidrelief.jpeg" style="width:200px;height:200px" alt="...">Aid Relief: (324)
							</a>
							</div>

							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/teaching1.jpeg"  style="width:200px;height:200px" alt="...">Teaching: (126)
							</a>
							</div>

						</div>
											<div class="row row2" align="center">
						
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/CodingSnippet.jpeg" style="width:200px;height:200px" alt="...">Coding in Schools: (822) 
							</a>
							</div>
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/Plumbers.png" style="width:200px;height:200px" alt="...">Plumbing: (632)
							</a>
							</div>

							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="img/old.jpeg"  style="width:200px;height:200px" alt="...">Elderly Aid: (92)
							</a>
							</div>

						</div>
					</div>

			<?php
			include("footer.php");
			?>