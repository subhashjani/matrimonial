
<?php
    session_start();
	if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{
	$email=$_COOKIE["user"];
?>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".login").click(function(){
			$("#login").modal();
			
		});
		$(".page").click(function(){
			$("#page").open();
			
		});

	});


</script>

     </head>
	 <body>
	 
<div class="row" style="background-color:#1D0B93">
	<div class="container-fluid">	

<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header" style="background-color:#040505 ; opacity:0.8 ; color: white"> change-password</div>
				<form  method="post" action="changepassword.php">
				
				<div class="modal-body">
				 
curent password<input type="password" name="cp" class="form-control" placeholder="enter curent password"required="required"><br>
new password<input type="password" name="np" class="form-control"  placeholder="enter new password"required="required"><br>
retype password<input type="password" name="rp" class="form-control"  placeholder="retype password"required="required"><br>
<button class="btn btn-warning"> change-password</button>
</form>
				</div>


		</div>
	</div>


</div>
  



<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header" >
	<a  class="navbar-brand" href="http://127.0.0.1/matrimonial/home.php" style="float: left ; color:white">vivah.com</a>
	
</div>
 <ul class="nav navbar-nav">
        <li class="active"  style="color:white"><a href="http://127.0.0.1/matrimonial/profile.php">profile</a></li>

      </ul>
<ul class="nav navbar-nav navbar-right">

	<li class="login" ><a href="#"style="color:white">change-password</a></li>
	
	<li><a href="http://127.0.0.1/matrimonial/search.php" style="color:white"> Serch</a></li>
	<li><a href="http://127.0.0.1/matrimonial/logout1.php" style="color:white" > logout</a></li>
	<li><a href="http://127.0.0.1/matrimonial/delete.php"style="color:white"> delete-account</a></li>
	
	<li><a href="http://127.0.0.1/matrimonial/editprofile.php"style="color:white"> edit-profile</a></li>

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
										<li  data-target="#carousel" data-slide-to="3"></li>
													
					   
					    </ol>
						<div class="carousel-inner">
								<div class="item active">
										<img src="http://127.0.0.1/matrimonial/pic1.jpg" style="width: 1800px; height: 500px" class="img-responsive">
								</div>
								
								<div class="item">
										<img src="http://127.0.0.1/matrimonial/c2.jpg" style="width: 1800px; height: 500px" class="img-responsive">
								</div>
								<div class="item">
										<img src="http://127.0.0.1/matrimonial/pic2.jpg"  style="width: 1800px; height: 500px" class="img-responsive">
								</div>
								
								<div class="item">
										<img src="http://127.0.0.1/matrimonial/c3.jpg" style="width: 1800px; height: 500px" class="img-responsive">
								</div>
								
								
						</div>
				</div>

		</div><br>
	 <div class="container-fluid">

	

<?php

	mysql_connect("localhost","root","");
	mysql_select_db("matrimonialdb");
	$rs=mysql_query("select * from matri where email='$email'");

	if($r=mysql_fetch_array($rs)){
	}
	
	
			
		
		}	
?>
<div class="col-sm-6"  style="background-image:url(http://127.0.0.1/matrimonial/v2.jpg)">

<img src="<?php echo "upload/".$email.".jpg"; ?>" style="width: 300px; height: 300px; margin-left:85px" class="img-responsive img-circle">
<a href="editp.php" class="btn btn-defualt" style="background-color:black ;color:white; margin-left:85px">edit-photo</a><br><br>

<a href="http://127.0.0.1/matrimonial/inbox.php"><img src="inb9.png" style="width: 200px; height: 200px; margin-left:140px" class="btn"></a><br><br><br>
<table border="2" style="margin-left:140px">

<tr><td><h4 style="color: white">profile view by people</td><td style="color:white"><?php echo $r[15]; ?></h4></td></tr>
</table>
</div>


 <div class="col-sm-6" style="background-image:url(http://127.0.0.1/matrimonial/bc.png)">

 
		<h3 style="margin-left:200px; color: white"><b>PROFILE DETAILS</b></h3>
 
<table class="table table-responsive">
					<tr style="color: white"><td>Name</td><td style="color: white"><?php echo $r[0]; ?></td></tr>
					<tr><td style="color: white">Gender</td><td style="color: white"><?php echo $r[1]; ?></td></tr>
					<tr><td style="color: white">Country</td><td style="color: white"><?php echo $r[2]; ?></td></tr>
					<tr><td style="color: white">Address</td><td style="color: white"><?php echo $r[3]; ?></td></tr>
					<tr><td style="color: white">Height</td><td style="color: white"><?php echo $r[4]; ?></td></tr>
				<tr><td style="color: white">DOB</td><td style="color: white"><?php echo $r[5]; ?></td></tr>
				<tr><td style="color: white">Highest Education</td><td style="color: white"><?php echo $r[6]; ?></td></tr>
				<tr><td style="color: white">Work Area</td><td style="color: white"><?php echo $r[7]; ?></td></tr>
				<tr><td style="color: white">Mother Tongue</td><td style="color: white"><?php echo $r[8]; ?></td></tr>
				<tr><td style="color: white">Religion</td><td style="color: white"><?php echo $r[9]; ?></td></tr>
				<tr><td style="color: white">Marital Status</td><td style="color: white"><?php echo $r[10]; ?></td></tr>
				<tr><td style="color: white">Phone Number</td><td style="color: white"><?php echo $r[11]; ?></td></tr>
				<tr><td style="color: white">Email</td><td style="color: white"><?php echo $r[12]; ?></td></tr>
				
<tr><td style="color: white">Prolile visit</td><td style="color:white"><?php echo $r[14]; ?></td></tr>
				
				</table>


</div>




</div>

</div>
</div>
</body>
</html>