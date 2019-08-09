<?php
if(!isset($_COOKIE["user"])){
	header("location:login.php");
}
else{
	$email=$_COOKIE["user"];

?>
<form method="post" action="changepassword.php">
curent password<input type="password" name="cp" placeholder="enter curent password"required="required"><br>
new password<input type="password" name="np" placeholder="enter new password"required="required"><br>
retype password<input type="password" name="rp" placeholder="retype password"required="required"><br>
<input type="submit" value="submit">
</form>
<?php
}
?>