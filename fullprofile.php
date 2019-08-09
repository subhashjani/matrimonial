
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

<?php
	if(isset($_GET["errmsg"])){
		echo "Message not sent";
	} 
	if(isset($_GET["successmsg"])){
		echo "messsage sent";
	}
	if(!isset($_COOKIE["user"])){
		header("location:login.php?erroor=1");
	}
	else{
		$profiler=$_GET["email"];
		$visitor=$_COOKIE["user"];
		mysql_connect("localhost","root","");
		mysql_select_db("matrimonialdb");
		$rs=mysql_query("select * from matri where email='$profiler'");

		while($r=mysql_fetch_array($rs)){
			
			?>
			
<img src="<?php echo "upload/".$r[12].".jpg"; ?>" style="width: 300px; height: 300px; margin-left:85px" class="img-responsive img-circle">
<?php
			

 echo "name:-".$r[0]."<br>"."gender:-".$r[1]."<br>"."country:-".$r[2]."<br>"."address:-".$r[3]."<br>"."dob:-".$r[4]."<br>"."height:-".$r[5]."<br>highest education:-".$r[6]."<br>work area:-".$r[7]."<br>mother tongue:-".$r[8]."<br>religion:-".$r[9]."<br>marital status:-".$r[10]."<br>phone number:-".$r[11]."<br>email:-".$r[12]."<br>"."<br>"."<br>";

 ?>

 		<div class="modal fade" role="dialog" id="login">
 			<div class="modal-dialog">
 				<div class="modal-content">
 					<div class="modal-header" style="background : red; color : white ">Message</div>
 					
 						<form method="post" action="msg.php">
 							<div class="modal-body">
 								<input type="hidden" name="email" value="<?php echo $r[12] ; ?>" >
 							Message <textarea rows=5 cols=50 type="form-control" name="msg"></textarea>
 							</div>
 							<button class="btn btn-warning"> send</button>
 						</form>
 					
 				</div>
 			</div>
 		</div>
<li class="login" style="btn btn-warning"><a href="#"style="color:red" >massage</a></li>
	
 <?php

			
		}

		$v_p=$visitor."_".$profiler;
		$rs=mysql_query("select * from unick");
		$count=0;
		$sn=0;
		$ab=mysql_query("select max(sn) from unick");

		if($aba=mysql_fetch_array($ab)){
			$sn=$aba[0];
		}
		$sn++;

		while($r=mysql_fetch_array($rs)){
			if($r[1]!=$v_p){
				$count++;
			}
		}

		if($sn==$count+1){
			mysql_query("insert into unick values($sn,'$v_p')");
			mysql_query("update matri set unique_visitor=unique_visitor + 1 where email='$profiler'");
		}

	}
 ?>
 
 
 
 
 
 