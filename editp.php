<?php
if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{
	$email=$_COOKIE["user"];
?>
<form method="post" enctype="multipart/from-data" action="profilep.php">
Upload Photo<input type="file" name="photo"><br>
<input type="submit" value="upload" class="btn btn-alert">
</form>
<?php
}
?>