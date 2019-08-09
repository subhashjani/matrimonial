
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header" >
	<a  class="navbar-brand" href="http://127.0.0.1/matrimonial/home.php" style="float: left ; color:white">vivah.com</a>
	
</div>
 <ul class="nav navbar-nav">
        <li class="active"  style="color:white"><a href="http://127.0.0.1/matrimonial/search.php">search</a></li>

      </ul>
<ul class="nav navbar-nav navbar-right">

	
	<li><a href="http://127.0.0.1/matrimonial/logout1.php" style="color:white" > logout</a></li>
	
	<li><a href="http://127.0.0.1/matrimonial/profile.php"style="color:white"> profile</a></li>

	<li><a href="http://127.0.0.1/matrimonial/home.php"style="color:white">home</a></li>
	
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
										<img src="http://127.0.0.1/matrimonial/pic1.jpg"style="width: 1800px; height: 500px" class="img-responsive">
								</div>
								<div class="item">
										<img src="http://127.0.0.1/matrimonial/pic2.jpg" style="width: 1800px; height: 500px"class="img-responsive">
								</div>
								
								<div class="item">
										<img src="http://127.0.0.1/matrimonial/ni.jpg"style="width: 1800px; height: 500px" class="img-responsive">
								</div>
								
								
						</div>
				</div>

		</div><br>
	 <div class="container-fluid">
<div class="col-sm-4">
</div>
<div class="col-sm-4">
<?php
if(empty($_POST["gender"])||empty($_POST["religion"])||empty($_POST["wa"])){
	header("location:search.php");

}
else{
?>		


<?php
		$gender=$_POST["gender"];
			$religion=$_POST["religion"];
			$wa=$_POST["wa"];
			mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		$rs=mysql_query("select * from matri where gender='$gender' AND wa='$wa' AND religion='$religion'");
		while($r=mysql_fetch_array($rs)){
	?>
	
		

<img src="<?php echo "upload/".$r[12].".jpg"; ?>" style="width: 300px; height: 300px; margin-left:85px" class="img-responsive img-circle">
		<table class="table table-responsive">
					<tr><td>Name</td><td><?php echo $r[0]; ?></td></tr>
					<tr><td>Gender</td><td><?php echo $r[1]; ?></td></tr>
					<tr><td>Country</td><td><?php echo $r[2]; ?></td></tr>
		</table>
		<a href="fullprofile.php?email=<?php echo $r[12]; ?>" class="btn btn-warning">view Profile</a><br><br>
		<?php
		}
		
		
		
}
?>


</div>

	 <div class="col-sm-4">
	 </div>
</div>
</body>