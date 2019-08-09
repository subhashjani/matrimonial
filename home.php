<html>
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".login").click(function(){
			$("#login").modal();
		});

	});


</script>

     </head>
	 <body>

<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header" style="background-color: red ; color: white"> Login</div>
				<form  method="post" action="check1.php">
				<div class="modal-body">
						Email<input type="email"  class="form-control" placeholder="email" name="email" reqired="required"><br>
				password<input type="password"  class="form-control" placeholder="enter password" name="password"><br>
				<button class="btn btn-warning"> Login</button>
	</form>
				</div>


		</div>
	</div>


</div>





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



<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header" style="background-color: red ; color: white"> Login</div>
				<form  method="post" action="check1.php">
				<div class="modal-body">
						Email<input type="email"  class="form-control" placeholder="email" name="email" reqired="required"><br>
				password<input type="password"  class="form-control" placeholder="enter password" name="password"><br>
				<button class="btn btn-warning"> Login</button>
	</form>
				</div>


		</div>
	</div>


</div>



<nav class="navbar navbar-inverse"  style="background-color:rgb(255,0,0) ; opacity:1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" style="color:white" href="http://127.0.0.1/matrimonial/home.php">vivah.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"  style="color:white"><a href="http://127.0.0.1/matrimonial/home.php">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li  class="login"><a href="#"   style="color:white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid"  style="margin-top:-20px">

<div class="row" style="background-image:url(http://127.0.0.1/matrimonial/44.jpg) ; height:550px">

 <div class="col-sm-4" style=" margin-top:400px">
<h3>
Love is looking for you.</h3>
<h3>Be found on vivah.com</h3>
</div>




<div class="col-sm-4">
</div>
		  <div class="col-sm-4"  style="margin-top:47px">
			
				<div class="panel panel-primary">
					    <div class="panel-heading">Registration</div>
						<div class="panel-body">	
	
<form method="post" action="reg.php">
name<input type="text"placeholder="enter name" class="form-control" name="name"required="required"><br>   
gender<input type="radio"name="gender"value="male">male<input type="radio"name="gender" value="female">female<br>
country<select name="country" class="form-control" required="required"><br>
<option value="india">india</option>
<option value="america">america</option>
<option value="china">china</option>
<option value="nepal">nepal</option>
<option value="bhutan">bhutan</option>
<option value="pakisthan">pakisthan</option>
</select>
phone number<input type="text" placeholder="enter phone number"name="pn" class="form-control" required="required"><br>
Email<input type="Email"placeholder="enter email" class="form-control" name="email"required="required"><br>
password<input type="password"placeholder="password" class="form-control"  name="password"required="required"><br>  
<input type="submit"style="color:blue" value="registration"/>

</form>
</div></div>
</div>
</div>
</div>
</div>


<div class="container-fluid" style="background-color: red">	
   <div class="col-sm-4">     
</div>
  <div class="col-sm-4">
  
<h1  style="color: white">success storys<h1>
  </div>
  </div>
<div class="row" style=" background-color:red">
   <div class="col-sm-4">
   
			 <h3  style="color: black">arun weds riya</h3>
   		<table class="table table-responsive">
        	<tr>
            	<td><img src="http://127.0.0.1/matrimonial/pic4%20(2).jpg" class="img-responsiveclass" style="height:200px" /></td>
				
             
            </tr>
<tr> <form method="post" action="s.php">
			<td><button class="btn btn-warning" >review</button></td></form>
    </tr>            
        
        </table>
   
   </div>
   
    <div class="col-sm-4">
	
	
<h3  style="color: black">ashif weds jarin khan</h3>
	
   		<table class="table table-responsive">
        	<tr>
            	<td><img src="pic5.jpg" class="img-responsive"  style="height:200px"  /></td>
             </tr>
               	 <tr>
				 <form method="post" action="u.php">
			<td><button class="btn btn-warning" >review</button></td></form>
    </tr>  
        
                
        
        </table>
   
   </div>
    <div class="col-sm-4">
	
	
<h3 style="color: black"> Priyanka Bhaskar weds mayank</h3>
	
   		<table class="table table-responsive">
        	<tr>
			<form method="post" action="b.php">
            	<td><img src="pic6.jpg" class="img-responsive"  style="height:200px"  /></td><form>
             </tr>
			 <tr>
			<td><button class="btn btn-warning" >review</button></td>
    </tr>  
        
        </table>
   
   </div>
</div>
<div class="parallax1" id="nav1"></div>


<div class="row" style=" background-color:#F8F6F6; color:black">

<h2 style="margin-left:470px">Why choose vivah.com?</h2>
<h4 style="margin-left:135px">Family marriage is different from other matchmaking sites because of some unique benefits that every parent will find highly useful</h4><br>

   <div class="col-sm-4">
   		<table class="table table-responsive">
        	<tr>
            	<td><img src="icon7.jpg" class="img-responsive" style="height:200px" /></td>
             </tr>
			 <tr><td><h3>Find Common Links with Prospects</h3></td></tr>
             <tr>
             	<td align="center"><h4 style="font-family:Verdana, Geneva, sans-serif ;">A common native place, college or company can help you find references and make background checks.</h4></td>
              </tr>
                
        
        </table>
   
   </div>
    <div class="col-sm-4">
   		<table class="table table-responsive">
		<tr>
            	<td><img src="icon2.jpg" class="img-responsive"  style="height:200px"  /></td>
             </tr>
			 <tr><td><h3>Get Matches from your Community</h3></td></tr>
             <tr>
             	<td align="center"><h4 style="font-family:Verdana, Geneva, sans-serif ;"> you can find a match from your community. as well as your choice.</h4></td>
              </tr>
		
		
                
        
        </table>
   
   </div>
    <div class="col-sm-4">
   		<table class="table table-responsive">
        	
           
		
		
        	<tr>
            	<td><img src="icon3.jpg" class="img-responsive"  style="height:200px"  /></td>
             </tr>
			 <tr><td><h3>
Get Complete Family Information</h3></td></tr>
             <tr>
             	<td><h4 style="font-family:Verdana, Geneva, sans-serif ;">You will find detailed family information in every biodata. Knowing the family will help you take the next step with confidence.</h4></td>
              </tr>     
        
        </table>
   
   </div>
</div>




    <div class="container-fluid">

	
   <div class="col-sm-4">     
</div>
  <div class="col-sm-4">
  
<h2  style="color: black">About vivah.com<h2>
  </div>
  </div>
	
    <div class="container-fluid">
	<h3><i>
vivah.com is one of the leading and most trusted matrimony websites in india making happy marriages happen since 2018,
providing the importance of choosing the right partner for marriage. especially in the indian culturel setup. it is believes in
providing the most secure and convenient matchmaking experience to  all its members by ensuring 100% screening,exclusive privacy
options,photo protection features and verification of phone numbers and more information. while the online matrimonial site connects
millions of people directly.</i>	</h3>
</div>

<div class="parallax" id="nav1"></div>

<div class="row" style=" background-color:#EAEAEA; color:black">
   
   </div>


<div class="row" style="height:50px ; background-color:#DEDBDB">

<div style="margin-top:20px; margin-left:490px">Passionately created by:<a href="https://twitter.com/Subhash_Jani29">Jani </a>&<a href="https://www.skillhoard.com/">skillhoard </a></div>
</div>






</div>


</body>
</html>
