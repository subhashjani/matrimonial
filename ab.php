<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

	<h4 style="color: white ; float: right" class="login">Nikhil Vijay</h4>

<a href="#" style="float: right"> Login</a>
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
country<select name="country" class="form-control" required="required">
<option value="india">india</option>
<option value="china">china</option>
<option value="nepal">nepal</option>
<option value="bhutan">bhutan</option>
<option value="pakisthan">pakisthan</option>
</select><br>
address<textarea placeholder="enter name"name="address" class="form-control" required="required"></textarea><br>
height<select name="height" class="form-control" required="required">
<option value="184cm">184cm</option>
<option value="185cm">185cm</option>
<option value="186cm">186cm</option>

</select><br>
dob<input type="date" name="dob" class="form-control" required="required"><br>
highest education<select  name="highedu" class="form-control" required="required">
<option value="B.SC">B.SC</option>
<option value="M.A">M.A</option>
<option value="B.A">B.A</option>
</select><br>
work area<select name="wa" class="form-control" required="required">
<option value="private sector">private sector</option>
<option value="govt. employ">govt. employe</option>
<option value="self employe">self employe</option>
</select><br>
mother tongue<select name="mt" class="form-control" required="required">
<option value="hindi">hindi</option>
<option value="english">english</option>
<option value="punjabi">punjabi</option>
</select><br>
religion<select name="religion" class="form-control" required="required">
<option value="hindu">hindu</option>
<option value="muslim">muslim</option>
<option value="shikh">shikh</option>
</select><br>
marital status<input type="radio"name="ms"value="married">married<input type="radio"name="ms"value="never married">never married<br>
phone number<input type="text" placeholder="phone number" class="form-control" name="pn"required="required"><br>


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
			  
		    	<img src="http://127.0.0.1/matrimonial/pic2.jpg" width="1000" height="1000" class="img-responsive img-circle">
		    
		    	<img src="1.jpg" class="img-responsive img-circle">
		    </div>
		
		
		</div>
	</body>
</html>