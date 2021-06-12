

	
	<!DOCTYPE html>
<html>
		<head> 
		
			<style>
				#form1
				{
					background-color:black;
					position:absolute;
					left:100px;
					top:150px;
					
					padding: 100px 100px 100px 100px;
					color:white;
				}
				body {
   background-image: url("placements1.jpg");
   background-color: black
}

				</style>
				</head>
<body bgcolor="grey">

<div style="margin-left:25%;padding:40px  40px 40px 250px;height:700px;">
  <h1>  ADD ADMIN DETAILS</h1></br>
		<form id="form1"   action="addadmin1.php" method="POST" href="home.php"  >
				
				
				
				<p> username:</p>
				<input type="text" name="username"  required /> 
				

				<p>Password:</p>
				<input type="text" name="password"  required  /> 
				 
				<br />
				</br>
				<button> Add </button> 
			
			</form>
		
		
</div>
</body>
</html>