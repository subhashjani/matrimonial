<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
	
		$email=$_COOKIE["user"];
		$profiler=$_POST["email"];
		$msg= $_REQUEST["msg"];
		$date=date("d m, y");

		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");

		$sn=0;
		$rs=mysql_query("select max(sn) from inbox");
		if($r=mysql_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn++;
		$a=mysql_query("insert into inbox values($sn,'$email','$profiler','$msg','$date','')");
		if(is_null($a)){
			header("location:fullprofile.php?email='$email'&errmsg=1");
		}
		else{
			header("location:fullprofile.php?email='$email'&successmsg=1");
		}
 ?>

</body>
</html>