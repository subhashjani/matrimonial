
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
 

<link rel="stylesheet" href="bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".login").click(function(){
			$("#login").modal();
		});

	});


</script>

 
.parallax {
    /* The image used */
    background-image: url("back.jpg");

    /* Set a specific height */
    min-height: 500px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	
}

.parallax1 {
    /* The image used */
    background-image: url("89.jpg");

    /* Set a specific height */
    min-height: 500px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	
}
</style>


</head>






<body>

<div class="container-fluid"  class="row" style="background-image:url(http://127.0.0.1/matrimonial/c1.jpg) ; height:550px">

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header" >
	<a  class="navbar-brand" href="http://127.0.0.1/matrimonial/home.php" style="float: left ; color:white">vivah.com</a>
	
</div>
 <ul class="nav navbar-nav">
        <li class="active"  style="color:white"><a href="http://127.0.0.1/matrimonial/search.php">search</a></li>

      </ul>
<ul class="nav navbar-nav navbar-right">

	
	<li><a href="http://127.0.0.1/matrimonial/logout1.php" style="color:white" > logout</a></li>
	
	<li><a href="http://127.0.0.1/matrimonial/profile.php"style="color:white"> profile</a></li>

	<li><a href="http://127.0.0.1/matrimonial/home.php"style="color:white">home</a></li>
	
	</ul>
	</div>
	
</nav>


		                                                                                    

<div class="col-sm-4">
	
</div>
		  <div class="col-sm-4">
		

</div>

 <div class="col-sm-4">


<h3><label style=" margin-top:50px; margin-right:40px; float:right">Matches within your community</label>
           
<label style="margin-right:70px; float:right">Genuine | Secure | Detailed </label> <br><br><br>
</h3>
    <label style="background-color:#333 ; opacity:0.8 ;  margin-right:50px ; width:400px ;border:2;  float:right">
    <h3 style="color: white">search</h3>
	
	
	
<form method="post" action="search1.php">

gender<select name="gender" required="required" class="form-control">
<option value="male">male</option>
<option value="female">female</option>
</select><br>
religion<select name="religion" required="required" class="form-control">
<option value="hindu">hindu</option>
<option value="muslim">muslim</option>
<option value="shikh">shikh</option>
</select><br>
<h4 style="color: white">work area</h4><select name="wa" required="required" class="form-control">
<option value="private sector">private sector</option>
<option value="govt. employ">govt. employe</option>
<option value="self employe">self employe</option>
</select><br>

            <input type="submit" value="Search" class="btn btn-default" style="background-color:#E60404 ; color:white ; border:none" />  

</form>
	
			</label>
    </div>

</div>
</div>


<div class="parallax1" id="nav1"></div>
<div class="container-fluid" class="row" style=" background-color:#F8F6F6; color:black">

<h2 style="margin-left:400px">!!choose your eligible life partner!!</h2>
<div class="col-sm-4">
<h3 style="color: black">pallav sharma</h3>

<image src="pl.jpg" width="250" height="250">
<form method="post" action="promo1.php">
<button class="btn btn-warning" style=" margin-left:70px">view profile</button>
</form>
</div>
<div class="col-sm-4">
<h3  style="color: black">dhapudi devi</h3>

<image src="mi.jpg".jpg" width="250" height="250">
<form method="post" action="promo2.php">
<button class="btn btn-warning"  style=" margin-left:70px">view profile</button>
</form>
</div>
<div class="col-sm-4">
<h3 style="color: black"> ronaldo</h3>

<image src="lo.jpg" width="250" height="250">
<form method="post" action="promo3.php">
<button class="btn btn-warning"  style=" margin-left:70px">view profile</button>
</form>
</div>
</div>
</body>
</html>