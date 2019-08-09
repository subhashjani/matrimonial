<?php
if(empty($_POST["name"])||empty($_POST["gender"])||empty($_POST["country"])||empty($_POST["pn"])||empty($_POST["email"])||empty($_POST["password"])){
	header("location:home.php");
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
		$pn=$_POST["pn"];
		$email=$_POST["email"];
			$password=$_POST["password"];
		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		mysql_query("insert into reg values ('$name','$gender','$country',$pn,'$email','$password')")or die(mysql_error());
setcookie("user","$email",time()+3600);
	     header("location:signup1.php");

}
}
		 ?>