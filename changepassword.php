<?php
if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{
	if(empty($_POST["cp"])||empty($_POST["np"])||empty($_POST["rp"])){
		header("location:profile.php");
	}
	else{
		$cp=$_POST["cp"];
		$np=$_POST["np"];
		$rp=$_POST["rp"];
		$email=$_COOKIE["user"];
		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		$rs=mysql_query("select * from matri where email='$email'");
		if($r=mysql_fetch_array($rs)){
		if($r["password"]==$cp){
			if($rp==$np){
				mysql_query("update matri set password='$np' where email='$email'");
				header("location:profile.php?success=1");
			}
			else{
				header("location:profile.php?mismatch=1");
			}
		}
		else{
			header("location:profile.php?invalid=1");
		}
		}
		else{
			header("location:logout.php");
		}
		
		
	
	}
}
	?>