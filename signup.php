<html>
<head>
<title>sign up</title>
</head>
<body>

<form method="post" action="check.php">
<h3>create your matrimonial account</h3>
<h5>personal detail</h5>
name<input type="text"placeholder="enter name"name="name"required="required"><br>
gender<input type="radio"name="gender"value="male">male<input type="radio"name="gender"value="female">female<br>
country<select name="country"required="required">
<option value="india">india</option>
<option value="china">china</option>
<option value="nepal">nepal</option>
<option value="bhutan">bhutan</option>
<option value="pakisthan">pakisthan</option>
</select><br>
address<textarea placeholder="enter name"name="address"required="required"></textarea><br>
height<select name="height"required="required">
<option value="184cm">184cm</option>
<option value="185cm">185cm</option>
<option value="186cm">186cm</option>

</select><br>
dob<input type="date" name="dob"required="required"><br>
<h5>carrer details</h5>
highest education<select  name="highedu"required="required">
<option value="B.SC">B.SC</option>
<option value="M.A">M.A</option>
<option value="B.A">B.A</option>
</select><br>
work area<select name="wa"required="required">
<option value="private sector">private sector</option>
<option value="govt. employ">govt. employe</option>
<option value="self employe">self employe</option>
</select><br>
<h5>social detail</h5>
mother tongue<select name="mt"required="required">
<option value="hindi">hindi</option>
<option value="english">english</option>
<option value="punjabi">punjabi</option>
</select><br>
religion<select name="religion"required="required">
<option value="hindu">hindu</option>
<option value="muslim">muslim</option>
<option value="shikh">shikh</option>
</select><br>
marital status<input type="radio"name="ms"value="married">married<input type="radio"name="ms"value="never married">never married<br>
<h5>login details</h5>
phone number<input type="text" placeholder="phone number"name="pn"required="required"><br>
Email<input type="Email"placeholder="enter name" name="email"required="required"><br>
password<input type="password"placeholder="password" name="password"required="required"><br>
<input type="submit" value="sign up">
</form>
</body>
</html>
