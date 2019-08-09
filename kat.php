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
				<div class="modal-header" style="background-color: red ; color: white"> Login</div>
				<div class="modal-body">
						Email<input type="email"  class="form-control" placeholder="email" name="email" reqired="required"><br>
password<input type="password"  class="form-control" placeholder="enter password" name="password"><br>
<button class="btn btn-warning"> Login</button>
				</div>


		</div>
	</div>


</div>

<div class="jumbotron" style="background-color: red">

	<h4 style="color: white ; float: right" >Nikhil Vijay</h4>

<a href="#" style="float: right" class="login"> Login</a>
<a href="#" style="float: right"> Sign-up</a>
</div>

		  <div class="col-sm-4">
			
				<div class="panel panel-primary">
					    <div class="panel-heading">Registration</div>
						<div class="panel-body">

<form method="post" action="check..php">
 <label>Name</label><input type="text" class="form-control" placeholder="enter name" name="name" required=required><br>
Email<input type="email"  class="form-control" placeholder="email" name="email" reqired="required"><br>
password<input type="password"  class="form-control" placeholder="enter password" name="password"><br>
Gender<input type ="radio" name="gender" value="male">male
<input type ="radio" name="gender" value="female">female<br>
language<input type="checkbox" name="c">
City<select name="city"  class="form-control">
<option value="bikaner">Bikaner</option>
<option value="kota">kota</option>
file <input type ="file" name="photo"  class="form-control"><br>
<input type ="submit" value="sign-up" class="btn btn-primary">
</form> </div>
	</div> 

</select><br>


		  </div>
		  
		  
		   <div class="col-sm-4">
				<table class="table table-responsive table-hover">
					<tr><td>sn</td><td>Name</td><td>Avg</td></tr>
					<tr><td>1</td><td>Jani</td><td>99</td></tr>
					<tr><td>1</td><td>Jani</td><td>99</td></tr>
					<tr><td>1</td><td>Jani</td><td>99</td></tr>
					<tr><td>1</td><td>Jani</td><td>99</td></tr>
				</table>
					 </div>
					 
		    <div class="col-sm-4">
		    	<img src="1.jpg" class="img-responsive img-circle">
		    </div>
		
		
		</div>
	</body>
</html>