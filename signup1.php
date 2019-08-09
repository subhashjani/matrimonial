
		
		<?php
if(!isset($_COOKIE["user"])){
	header("location:home.php");
}
else{
	$email=$_COOKIE["user"];
			mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		$rs=mysql_query("select * from reg where email='$email'");
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




	 
<nav class="navbar navbar-inverse"  style="background-color:rgb(255,0,0) ; opacity:1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" style="color:white" href="http://127.0.0.1/matrimonial/home.php">vivah.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"  style="color:white"><a href="http://127.0.0.1/matrimonial/signup1.php">sign-up</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li  class="login"><a href="#"   style="color:white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		
        <li><a href="http://127.0.0.1/matrimonial/home.php"   style="color:white"><span class="glyphicon glyphicon-home"></span> home</a></li>
      </ul>
    </div>
  </div>
</nav>


		<div class="container-fluid">
		
<div class="col-sm-12">
<div class="col-sm-3">
<img src="var1.png" class="img-responsive"  style="height:1000px"  />
</div>
		  <div class="col-sm-6">
			

<form method="post" enctype="multipart/form-data" action="check.php">


<input type="hidden" class="form-control"  value="<?php echo $r[0]; ?>" name="name">

<input type="hidden" select name="gender"  value="<?php echo $r[1]; ?>"> 
<option value="male"></option>
<option value="female"></option>
</select>

				<div class="panel panel-primary">
					    <div class="panel-heading">other details</div>
						<div class="panel-body">
<input type="hidden" select name="country"  value="<?php echo $r[2]; ?>"> 
<option value="india"></option>
<option value="china"></option>

<h4>personal detail</h4>
<option value="nepal"></option>
<option value="bhutan"></option>
<option value="pakisthan"></option>
</select>

address<textarea placeholder="enter address" class="form-control" name="address"required="required"></textarea><br>
height<select name="height" class="form-control" required="required">
<option value="184cm">184cm</option>
<option value="185cm">185cm</option>
<option value="186cm">186cm</option>

</select><br>
dob<input type="date" name="dob" class="form-control" required="required"><br>
<h4>carrer details</h4>
highest education<select  name="highedu" class="form-control" required="required">
<option value="B.tech">B.tech</option>
<option value="B.SC">B.SC</option>
<option value="M.A">M.A</option>
<option value="B.A">B.A</option>
</select><br>
work area<select name="wa" class="form-control" required="required">
<option value="private sector">private sector</option>
<option value="govt. employ">govt. employe</option>
<option value="self employe">self employe</option>
</select><br>
<h4>social detail</h4>
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
marital status<input type="radio"name="ms"value="married">married<input type="radio"name="ms"value="never married">never married<br><br>

<input type="hidden"name="pn"  value="<?php echo $r[3]; ?>" class="form-control" required="required">
<input type="hidden" class="form-control" value="<?php echo $r[4]; ?>" name="email" required="required">
<input type="hidden" value="<?php echo $r[5]; ?>" class="form-control"  name="password"required="required">
<h4> photo</h4><input type ="file" name="photo"  class="form-control"><br>
<input type ="submit" value="sign-up" class="btn btn-primary">

</form>

 </div>
	</div> 
</div>
<div class="col-sm-3">
<img src="vadhu1.png" class="img-responsive"  style="height:1000px"  />
</div>

	</div>	  
	</div>  

	
<div class="row" style="height:50px ; background-color:#DEDBDB">

<div style="margin-top:20px; margin-left:490px">Passionately created by:<a href="https://twitter.com/Subhash_Jani29">Jani </a>&<a href="https://www.skillhoard.com/">skillhoard </a></div>
</div>
	
	</body>
</html>
<?php
		}
}
?>





