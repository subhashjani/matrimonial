
<?php
if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{
	$email=$_COOKIE["user"];
	$img=$email.".jpg";
	$target = "upload/";
	$target = $target . $img;
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
		echo "image uploaded";
	}
	else{
		echo "sorry";
	}
}
?>