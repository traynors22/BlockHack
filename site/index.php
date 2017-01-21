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
				 		    <span><h1 style="color:white">World Relief</h1><h4 style="color:white"> - Do your bit to help out</h4></span>
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
							  <img src="tsunami.jpg" style="width:200px;height:200px" alt="...">Tsunami Relief: (788) 
							</a>
							</div>
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="aidrelief.jpeg" style="width:200px;height:200px" alt="...">Aid Relief: (324)
							</a>
							</div>

							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="http://www.star.ucl.ac.uk/~tgreve/images/teaching.jpg"  style="width:200px;height:200px" alt="...">Teaching: (126)
							</a>
							</div>

						</div>
											<div class="row row2" align="center">
						
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="http://edge.alluremedia.com.au/m/l/2015/06/CodingSnippet.jpg" style="width:200px;height:200px" alt="...">Coding in Schools: (822) 
							</a>
							</div>
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="http://acpfl.co/wp-content/uploads/2014/11/Plumbers.png" style="width:200px;height:200px" alt="...">Plumbing: (632)
							</a>
							</div>

							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="http://i.dailymail.co.uk/i/pix/2012/08/18/article-2190111-0B2F8F93000005DC-208_468x386.jpg"  style="width:200px;height:200px" alt="...">Elderly Aid: (92)
							</a>
							</div>

						</div>
					</div>

			<?php
			include("footer.php");
			?>