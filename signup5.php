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

	});


</script>
     </head>
	 <body>
		<div class="container-fluid">

<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header" style="background-color: pink ; color: white"> Login</div>
				<div class="modal-body">
						Email<input type="email"  class="form-control" placeholder="email" name="email" reqired="required"><br>
password<input type="password"  class="form-control" placeholder="enter password" name="password"><br>
<button class="btn btn-warning"> Login</button>
				</div>


		</div>
	</div>


</div>

<div class="jumbotron" style="background-color: pink">

	<h3 style="color: white ; float: left" class="login">JANI</h3>

<a href="#" style="float: right"> Login</a>

</div>

<div class="col-sm-4">
</div>
		  <div class="col-sm-4">
			
				<div class="panel panel-primary">
					    <div class="panel-heading">Registration</div>
						<div class="panel-body">

						<?php
	if(empty($_POST["mt"])||empty($_POST["religion"])||empty($_POST["ms"])){
		header("location:signup4.php");
	
	}
	else{
		
		$mt=$_POST["mt"];
		$religion=$_POST["religion"];
		$ms=$_POST["ms"];
		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		mysql_query("insert into matri values (0,0,0,0,0,0,0,0,'$mt','$religion','$ms',0,0,0,0)")or die(mysql_error());
	    
	}
	
	
?>
						
<form method="post" action="check.php">

<h4>login details</h4>
phone number<input type="text" placeholder="phone number"name="pn" class="form-control" required="required"><br>
Email<input type="Email"placeholder="enter name" class="form-control" name="email"required="required"><br>
password<input type="password"placeholder="password" class="form-control" name="password"required="required"><br>

file <input type ="file" name="photo"  class="form-control"><br>
<input type ="submit" value="sign-up" class="btn btn-primary">

</form> </div>
	</div> 

</select><br>


		  </div>
		  
		  
		  
		  
		  		
		</div>
	</body>
</html>