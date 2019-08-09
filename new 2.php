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

<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header" style="background-color: red ; color: white"> Login</div>
				<form  method="post" action="check1.php">
				<div class="modal-body">
						Email<input type="email"  class="form-control" placeholder="email" name="email" reqired="required"><br>
				password<input type="password"  class="form-control" placeholder="enter password" name="password"><br>
				<button class="btn btn-warning"> Login</button>
	</form>
				</div>


		</div>
	</div>


</div>


<nav class="navbar navbar-inverse" style="background-color: red">
<div class="container-fluid">
<div class="navbar-header" >
	<a  class="navbar-brand" href="http://127.0.0.1/matrimonial/home.php" style="float: left ; color:white">vivah.com</a>
</div>

<ul class="nav navbar-nav">

	<li class="login" ><a href="#"style="color:white">login</a></li>
	
	
	</ul>
	</div>
	
</nav>

	
	<div class="container-fluid">
	
		<style>
		body{background-image:url("http://127.0.0.1/matrimonial/ik.jpg")}
		</style>
	<div class="col-sm-4">
	
</div>
<div class="col-sm-4">
</div>
		  <div class="col-sm-4">
			
				<div class="panel panel-primary">
					    <div class="panel-heading">Registration</div>
						<div class="panel-body">

						<br><br><br>
<h3>
Love is looking for you.</h3>
<h3>Be found on vivah.com</h3>
<br><br><br><br><br><br><br>
</div>

<div class="container-fluid" style="background-color: red">

<h2  style="color: red">success storys<h2>
<div class="col-sm-4">
<h3 style="color: black">arun weds riya</h3>
<form method="post" action="s.php">
<image src="pic8.jpg" width="250" height="250">
<button class="btn btn-warning" >review</button>
</form>
</div>
<div class="col-sm-4">
<h3  style="color: black">ashif weds jarin khan</h3>
<form method="post" action="u.php">
<image src="pic5.jpg".jpg" width="250" height="250">
<button class="btn btn-warning" >review</button>
</form>
</div>
<div class="col-sm-4">
<h3 style="color: black"> Priyanka Bhaskar weds mayank</h3>
<form method="post" action="b.php">
<image src="pic6.jpg" width="250" height="250">
<button class="btn btn-warning" >review</button>
</form>
</div>

<i>vivah.com is one of the leading and most trusted matrimony websites in india making happy marriages happen since 2018,
providing the importance of choosing the right partner for marriage. especially in the indian culturel setup. it is believes in
providing the most secure and convenient matchmaking experience to  all its members by ensuring 100% screening,exclusive privacy
options,photo protection features and verification of phone numbers and more information. while the online matrimonial site connects
millions of people directly.</i>
</div> 


<div class="container-fluid" style="background-color: black ;  height: 100px">

</div>


	
</body>
</html>



		<style>
		form{background-image:url("http://127.0.0.1/matrimonial/ba1.jpg")}
		</style>
		
		
		
		
		
				<div class="panel panel-primary">
					    <div class="panel-heading">search</div>
						<div class="panel-body">

<form method="post" action="search1.php">

<b>gender</b><select name="gender" required="required" class="form-control">
<option value="male">male</option>
<option value="female">female</option>
</select><br>
religion<select name="religion" required="required" class="form-control">
<option value="hindu">hindu</option>
<option value="muslim">muslim</option>
<option value="shikh">shikh</option>
</select><br>
work area<select name="wa" required="required" class="form-control">
<option value="private sector">private sector</option>
<option value="govt. employ">govt. employe</option>
<option value="self employe">self employe</option>
</select><br>

<input type="submit" value="search"><br>
</form>
</div>
</div>
		
		
		
		
		
		