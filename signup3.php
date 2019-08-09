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
	if(empty($_POST["name"])||empty($_POST["gender"])||empty($_POST["country"])||empty($_POST["address"])||empty($_POST["dob"])||empty($_POST["height"])){
		header("location:signup2.php");
	
	}
	else{
		$name=$_POST["name"];
		$gender=$_POST["gender"];
		$country=$_POST["country"];
		$address=$_POST["address"];
		$dob=$_POST["dob"];
		$height=$_POST["height"];
		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		mysql_query("insert into matri values ('$name','$gender','$country','$address','$dob','$height',0,0,0,0,0,0,0,0,0)")or die(mysql_error());
	     
	}
	
	
?>						

<form method="post" action="signup4.php">

<h4>carrer details</h4>
highest education<select  name="highedu" class="form-control" required="required">
<option value="B.SC">B.SC</option>
<option value="M.A">M.A</option>
<option value="B.A">B.A</option>
</select><br>
work area<select name="wa" class="form-control" required="required">
<option value="private sector">private sector</option>
<option value="govt. employ">govt. employe</option>
<option value="self employe">self employe</option>
<input type ="submit" value="next" class="btn btn-primary">
</select><br>

</form> </div>
	</div> 

<br>


		  </div>
		  
		  
		  
		  
		  		
		</div>
	</body>
</html>