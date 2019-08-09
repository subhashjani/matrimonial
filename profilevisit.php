<?php

if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{
	$email=$_COOKIE["user"];
		session_start();
		
		if(isset($_COOKIE["user"])){
			$_SESSION["visit"]+=1;
		
		
					mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		mysql_query("update matri set visit='$visit' where email='$email'");
		
		header("location:profile.php");
		
		
		}
		else{
				$_SESSION["visit"]=1;
				
		}
}
?>