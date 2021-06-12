<!DOCTYPE html>
<html>
<head>
<style>

#two
{
	position:absolute;
			left:500px;
			top:100px;
			padding: 50px 50px 50px 50px;
					 					
}
h1{
	font-size:50px;
	color:white;
}
p
{
	color:white;
}

</style>
</head>

<body>

			<form id="two" action="adminhome1.php" method="POST"    >
					
				
				<h1> AdminLogin </h1>
				
				<p>Enter UserName:</p>
				<input type="text" name="username"  required > <br> 
				
				<p>Enter Password:</p>
				<input type="password" name="password"  required > <br> <br>
				
				
				<input type="submit" value="Login" >
				<br />
				
				
			</form>
			<img  src="images.jpeg" width="1365" height="700"  border=""/>
			
		
</body>
</html>