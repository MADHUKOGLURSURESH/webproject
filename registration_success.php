<!DOCTYPE html>

<html>

		<head> 
			<style>
				#one
				{
					
					position:absolute;
					left:600px;
					top:200px;
					border:  thin solid white;
					padding: 50px 50px 50px 50px;
					color:white;
				}
			
				div
				{
					position:absolute;
					left:500px;
					
					
				}	
				
			

				
			
			</style>

		</head>
		<body >
		<div>
			<h1 align="center" style="color:green;"> Registration Successful! Please Login  </h1>
		</div>
		<center>
			<form id="one" action="login1.php" method="POST"  >
				
				<h1 > Login </h1>
				
				<p>Enter USN:</p>
				<input type="text" name="usn"  required > <br> 
				
				<p>Enter Password:</p>
				<input type="password" name="password"  required > <br> <br>
				
				
				<input type="submit" value="Login" >
				<br />
				
			</form>
			</center>
			<img src="bg.jpg" width="1500" height="750"  border="3"/>
						
			
		
		</body>


</html>
