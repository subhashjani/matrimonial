
<?php
session_start();
 if(empty($_POST["email"])||empty($_POST["password"])){
	 header("location:home.php?err=1");
 }
 else{
	 $email=$_POST["email"];
	 $password=$_POST["password"];
	 mysql_connect("localhost","root","");
	 mysql_select_db("matrimonialdb");
	 $rs=mysql_query("select * from matri where email='$email'");
	 if($r=mysql_fetch_array($rs)){
		 if($r["password"]==$password){
		 setcookie("user",$email,time()+3600);
		  
		 $_SESSION["visit"] = $r["visit"];
		 $_SESSION["visit"]+=1;
		
		
				
		mysql_query("update matri set visit=".$_SESSION["visit"]." where email='$email'");
		 header("location:profile.php");
		 
		 }
	 
	 else{
		 header("location:home.php?mismatch=1");
	 }
	 }
	 
	 else{
		 header("location:home.php?invalid=1");
	 }
 }
 
 ?>