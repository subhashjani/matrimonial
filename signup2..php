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

<form method="post" action="signup3.php">
<h4>personal detail</h4>
name<input type="text"placeholder="enter name" class="form-control" name="name"required="required"><br>
gender<input type="radio"name="gender"value="male">male<input type="radio"name="gender"value="female">female<br>
country<select name="country" class="form-control" required="required">
<option value="india">india</option>
<option value="china">china</option>
<option value="nepal">nepal</option>
<option value="bhutan">bhutan</option>
<option value="pakisthan">pakisthan</option>
</select><br>
address<textarea placeholder="enter address" class="form-control" name="address"required="required"></textarea><br>
height<select name="height" class="form-control" required="required">
<option value="184cm">184cm</option>
<option value="185cm">185cm</option>
<option value="186cm">186cm</option>

</select><br>
dob<input type="date" name="dob" class="form-control" required="required"><br>
<input type ="submit" value="next" class="btn btn-primary">
</form> </div>
	</div> 

</select><br>


		  </div>
		  
		  
		   
</div>
	</body>
</html>