<?php
    session_start();
?>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     </head>
	 <body style="background-color: yellow">

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header" >
	<a  class="navbar-brand" href="http://127.0.0.1/matrimonial/home.php" style="float: left ; color:white">vivah.com</a>
</div>

<ul class="nav navbar-nav">

	
	
	<li><a href="http://127.0.0.1/matrimonial/search.php"> search</a></li>

	<li><a href="http://127.0.0.1/matrimonial/profile.php">profile</a></li>
	<li><a href="http://127.0.0.1/matrimonial/home.php">home</a></li>
	
	</ul>
	</div>
	
</nav>		

		<div class="container-fluid">
				<div class="carousel slide" id="carousel" data-ride="carousel">
					    <ol class="carousel-indicators">
					    	<li  data-target="#carousel" data-slide-to="0" class="active"></li>
					    	<li  data-target="#carousel" data-slide-to="1"></li>
							<li  data-target="#carousel" data-slide-to="2"></li>
					   
					    </ol>
						<div class="carousel-inner">
								<div class="item active">
										<img src="http://127.0.0.1/matrimonial/mi.jpg"style="width: 1800px; height: 500px" class="img-responsive">
								</div>
								<div class="item">
										<img src="http://127.0.0.1/matrimonial/pi.jpg" style="width: 1800px; height: 500px"class="img-responsive">
								</div>
								
								<div class="item">
										<img src="http://127.0.0.1/matrimonial/mi.jpg"style="width: 1800px; height: 500px" class="img-responsive">
								</div>
								
								
						</div>
				</div>

		</div><br>
	 <div class="container-fluid">
<div class="col-sm-6">
<img src="mi.jpg" style="width: 300px; height: 300px" class="img-responsive img-circle"><br>

</div>
	 <div class="col-sm-6">

	 
<h2>PROFILE</h2><br>
<h3>
<i>personal details</i><br>
<b>Name</b>:-babudi<br>
<b>gender</b>:-female<br>
<b>country</b>:-india<br>
<b>address</b>:-asdf<br>
<b>dob</b>:-2017-11-30<br>
<b>height</b>:-184cm<br><br>
<i>carrer details</i><br>
<b>highest education</b>:-B.SC<br>
<b>work area</b>:-private sector<br><br>
<i>social details</i><br>
<b>mother tongue</b>:-hindi<br>
<b>religion</b>:-hindu<br>
<b>martial status</b>:-maried<br><br>
<i>contect details</i><br>
<b>phone number</b>:-12345<br>
<b>email</b>:-babudi@gmail.com<br>
</h4>
	 </div>
</div>


<div class="container-fluid"  style="background-color: blue">
<div class="col-sm-4">
<h3 style="color: black">pallav sharma</h3>

<image src="pl.jpg" width="250" height="250">
<form method="post" action="promo1.php">
<button class="btn btn-warning" >view profile</button>
</form>
</div>
<div class="col-sm-4">
<h3  style="color: black">dhapudi devi</h3>
<
<image src="mi.jpg".jpg" width="250" height="250">
<form method="post" action="promo2.php">
<button class="btn btn-warning" >view profile</button>
</form>
</div>
<div class="col-sm-4">
<h3 style="color: black"> ronaldo</h3>

<image src="lo.jpg" width="250" height="250">
<form method="post" action="promo3.php">
<button class="btn btn-warning" >view profile</button>
</form>
</div>
</div>

	
<div class="container-fluid" style="background-color: black ;  height: 100px">

</div>
	
</body>