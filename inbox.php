<?php

if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{


	mysql_connect("localhost","root","");
	mysql_select_db("matrimonialdb");
	$email=$_COOKIE["user"];
	$rs=mysql_query("select froms,msg,dt from inbox where tos='$email'");
	while($r=mysql_fetch_array($rs)){
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

 		<div class="modal fade" role="dialog" id="login">
 			<div class="modal-dialog">
 				<div class="modal-content">
 					<div class="modal-header" style="background : red; color : white ">Message</div>
 					
 						<form method="post" action="msg.php">
 							<div class="modal-body">
 								<input type="hidden" name="email" value="<?php echo $r[0] ; ?>" >
 							Message <textarea rows=5 cols=50 type="form-control" name="msg"></textarea>
 							</div>
 							<button class="btn btn-warning"> send</button>
 						</form>
 					
 				</div>
 			</div>
 		</div>

<nav class="navbar navbar-inverse navbar-top-fixed" style="background:rgba(0,0,0,1)" >
<div class="container-fluid">
<div class="navbar-header" >
	<a  class="navbar-brand" href="http://127.0.0.1/matrimonial/home.php" style="float: left ; color:white;">vivah.com</a>
</div>

<ul class="nav navbar-nav">

	
	<li><a href="http://127.0.0.1/matrimonial/search.php"> search</a></li>
	<li><a href="http://127.0.0.1/matrimonial/logout1.php"> logout</a></li>
	
	<li><a href="http://127.0.0.1/matrimonial/profile.php"> profile</a></li>

	<li><a href="http://127.0.0.1/matrimonial/home.php">home</a></li>
	
	</ul>
	</div>
	
</nav>
		
		
		<?php
		echo "<b>Message : </b> <br> from : ".$r[0]." <br> message : ".$r[1]." date : ".$r[2]."<br> <br>";
	}
}
?>




<li class="login" style="btn btn-warning"><a href="#"style="color:red" >reply</a></li>



</body>
</html>


