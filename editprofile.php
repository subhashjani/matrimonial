<?php
if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{
	$email=$_COOKIE["user"];
			mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		$rs=mysql_query("select * from matri where email='$email'");
		if($r=mysql_fetch_array($rs)){
			
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

	});

</script>

     </head>
	 <body>

	
	<div class="container-fluid" style="background-color:#F2F3F4">
<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header" style="background-color:#040505 ; opacity:0.8  ; color: white"> change-password</div>
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
        <li class="active"  style="color:white"><a href="http://127.0.0.1/matrimonial/editprofile.php">edit-profile</a></li>

      </ul>
<ul class="nav navbar-nav navbar-right">

	<li class="login" ><a href="#"style="color:white">change-password</a></li>
	
	<li><a href="http://127.0.0.1/matrimonial/search.php" style="color:white"> Serch</a></li>
	<li><a href="http://127.0.0.1/matrimonial/logout1.php" style="color:white" > logout</a></li>
	<li><a href="http://127.0.0.1/matrimonial/delete.php"style="color:white"> delete-account</a></li>
	
	<li><a href="http://127.0.0.1/matrimonial/profile.php"style="color:white"> profile</a></li>

	<li><a href="http://127.0.0.1/matrimonial/home.php"style="color:white">home</a></li>
	
	</ul>
	</div>
	
</nav>

			
		<div class="col-sm-12">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
		 
			
				<div class="panel panel-primary">
					    <div class="panel-heading">edit-profile</div>
						<div class="panel-body">


	
	
<form method="post" action="updateprofile.php">

<h4><i>personal detail</i></h4>
name<br><input type="text" class="form-control" name="name" value=<?php echo $r[0];?>><br>
gender<br><select name="gender" class="form-control" value="<?php echo $r[1]; ?>" ><option value="male">male</option><option value="female">female</option></select><br>
country<br><select name="country" class="form-control" value="<?php echo $r[2];?>">
<option value="india">india</option>
<option value="china">china</option>
<option value="nepal">nepal</option>
<option value="bhutan">bhutan</option>
<option value="pakisthan">pakisthan</option>
</select><br>
address<br><textarea  class="form-control" name="address"><?php echo $r[3]; ?></textarea><br>
height<br><select name="height" class="form-control" value="<?php echo $r[4]; ?>">
<option value="184cm">184cm</option>
<option value="185cm">185cm</option>
<option value="186cm">186cm</option>

</select><br>
dob<br><input type="date" name="dob"  class="form-control"  value="<?php echo $r[5]; ?>" ><br><br>
<h4><i>carrer details</i></h4>
highest education<br><select  name="highedu"  class="form-control" value="<?php echo $r[6]; ?>">
<option value="B.SC">B.SC</option>
<option value="M.A">M.A</option>
<option value="B.A">B.A</option>
</select><br>
work area<br><select name="wa" class="form-control"  value="<?php echo $r[7]; ?>">
<option value="private sector">private sector</option>
<option value="govt. employ">govt. employe</option>
<option value="self employe">self employe</option>
</select><br><br>
<h4><i>social detail</i></h4>
mother tongue<br><select name="mt" class="form-control" value="<?php echo $r[8]; ?>">
<option value="hindi">hindi</option>
<option value="english">english</option>
<option value="punjabi">punjabi</option>
</select><br>
religion<br><select name="religion" class="form-control" value="<?php echo $r[9]; ?>">
<option value="hindu">hindu</option>
<option value="muslim">muslim</option>
<option value="shikh">shikh</option>
</select><br>
marital status<br><select name="ms" class="form-control" value="<?php echo $r[10]; ?>" ><option value="maried">maried</option><option value="naver maried">naver maried</option></select><br><br>
<h4><i>login details</i></h4>
phone number<br><input type="text" class="form-control" name="pn"value="<?php echo $r[11]; ?>"><br><br>
<input type="submit" value="update">
</form>
</div>
</div>

</div>
</div>
<div class="col-sm-2">
</div>
</body>
</html>
<?php
}

else{
	echo "record not found";
}
}
?>


