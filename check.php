<?php
session_start();
	if(empty($_POST["name"])||empty($_POST["gender"])||empty($_POST["country"])||empty($_POST["address"])||empty($_POST["dob"])||empty($_POST["height"])||empty($_POST["highedu"])||empty($_POST["wa"])||empty($_POST["mt"])||empty($_POST["religion"])||empty($_POST["ms"])||empty($_POST["pn"])||empty($_POST["email"])||empty($_POST["password"])){
		header("location:signup1.php");
	
	}
	else{
	   
	$email=$_POST["email"];
		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		$rs=mysql_query("select * from matri where email='$email'");
	 if($r=mysql_fetch_array($rs)){
		 header("location:home.php?invelid");
	 }
		else{
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
		$email=$_POST["email"];
		
		$img=$email.".jpg";  
$target = "upload/";  
$target = $target . $img; 
		$size=($_FILES['photo']['size']);
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
echo "Image Upload";
} 
else 
{ 
	echo "Sorry, there was a problem uploading your file.";
} 

		
		$password=$_POST["password"];
		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		mysql_query("insert into matri values ('$name','$gender','$country','$address','$dob','$height','$highedu','$wa','$mt','$religion','$ms','$pn','$email','$password',0,0)");
	    setcookie("user",$email,time()+3600);
		
		 $_SESSION["visit"] = $r["visit"];
		 $_SESSION["visit"]+=1;
	   mysql_query("update matri set visit=".$_SESSION["visit"]." where email='$email'");
	 
		header("location:profile.php");
	
		}
	}
?>




