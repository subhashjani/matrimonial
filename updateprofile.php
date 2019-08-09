<?php
if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{
	$email=$_COOKIE["user"];
		$name=$_POST["name"];
		$gender=$_POST["gender"];
		$country=$_POST["country"];
		$address=$_POST["address"];
		$dob=$_POST["dob"];
		$height=$_POST["height"];
		$highedu=$_POST["highedu"];
		$wa=$_POST["wa"];
		$mt=$_POST["mt"];
		$religion=$_POST["religion"];
		$ms=$_POST["ms"];
		$pn=$_POST["pn"];
		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		mysql_query("update matri set name='$name',gender='$gender',country='$country',address='$address',dob='$dob',height='$height',highestedu='$highedu',wa='$wa',mt='$mt',religion='$religion',ms='$ms',pn='$pn' where email='$email'");
	     header("location:profile.php");
	}

	?>
