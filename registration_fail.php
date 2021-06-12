<!DOCTYPE html>

<html>

		<head> 
			<style>

			
				#image1
				{
					position:absolute;
					left:600px;
					top:250px;
				
				}
			
				#form2
				{
					position:absolute;
					left:600px;
					top:150px;
					border:  thin solid white;
					padding: 20px 50px 40px 50px;
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
		<h1 align="center" style="color:red;"> Registration Fail ! Please Register again  </h1>
		
		</div>
<center>		
			
			
			
			
			<form id="form2"   action="registerdatabase.php" method="POST" >
				<h1 > Register </h1>
				<p> USN:</p>
				<input type="text" name="usn"  required > 
				<p>Name:</p>
				<input type="text" name="name"  required > 
				<p>Email ID:</p>   
				<input type="email" name="emailid" required > <br>
				<p>Password :</p>
				<input type="password" name="password"  required > <br> 
				<p>DoB:</p>
				<input type="date" name="dob"  required > <br> 
				<p>Branch:</p>
				<input type="text" name="branch"  required > <br> <br>
				<p>Year:</p>
				<input type="number" name="year"  required > <br> <br>
				<p>Phone:</p>
				<input type="number" name="phone"  required > <br> <br>
				<button> Register  </button> 
			
			</form>
			<img src="bg.jpg" width="1500" height="950"  border="3"/>
			
		
		</body>


</html>
