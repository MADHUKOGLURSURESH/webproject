<!DOCTYPE html>
<html>
<head>
<style>

#two
{
	position:absolute;
					left:350px;
					top:70px;
					
					padding: 30px 50px 50px 50px;
					
}
h1{
	font-size:50px;
	color:white;
}


</style>
</head>
<body>


			<form id="two" action="login1.php" method="POST"    >
					
				
				<h1 > STUDENT LOGIN </h1>
				
				<h2><p style="color:white";>Enter USN:</p></h2>
				<input type="text" name="usn"  required > <br> 
				
				<h2><p style="color:white";>Enter Password:</p></h2>
				<input type="password" name="password"  required > <br> <br>
				
				
				<input type="submit" value="Login" >
				<br />
				
			</form>
			<img  src="studentlogin.jpg" width="1350" height="620"  border="3"/>
</body>
</html>