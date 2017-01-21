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
							  <img src="http://images.google.fr/imgres?imgurl=http%3A%2F%2Fi.huffpost.com%2Fgen%2F1423287%2Fimages%2Fo-TEACHER-FOR-AMERICA-facebook.jpg&imgrefurl=http%3A%2F%2Fwww.huffingtonpost.com%2Fsandra-korn%2Fwhy-i-said-no-to-teach-for-america_b_4151764.html&h=1000&w=2000&tbnid=HDCAhRD1vKYx5M%3A&vet=1&docid=eWIIEh__vAnThM&ei=wOeDWIziJ8XCgAbsloCABg&tbm=isch&client=firefox-b&iact=rc&uact=3&dur=470&page=0&start=0&ndsp=15&ved=0ahUKEwiMwo24q9TRAhVFIcAKHWwLAGAQMwgxKAAwAA&noj=1&bih=713&biw=1440"  style="width:200px;height:200px" alt="...">Teaching: (126)
							</a>
							</div>

						</div>
											<div class="row row2" align="center">
						
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="http://img.thrfun.com/img/004/386/paint_roller_s.jpg" style="width:200px;height:200px" alt="...">Decoration: (822) 
							</a>
							</div>
							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="http://acpfl.co/wp-content/uploads/2014/11/Plumbers.png" style="width:200px;height:200px" alt="...">Plumbing: (632)
							</a>
							</div>

							<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
							  <img src="http://www.mteevanhire.co.uk/wp-content/uploads/2012/01/site_lighting-thumb.jpg"  style="width:200px;height:200px" alt="...">Power & Lighting: (92)
							</a>
							</div>

						</div>
					</div>

			<?php
			include("footer.php");
			?>