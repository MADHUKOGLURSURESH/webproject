
<html>
<head>
<style>
#form2
{
	position:absolute;
					left:600px;
					top:0px;
					
					padding: 0px 50px 50px 50px;
					
}

h1{
	color:black;
}
body {
   background-image: url("placements1.jpg");
   background-color: black;
}
<img  src="office.jpg" width="1380" height="800"  border="0" class="center" vspace="0"/>
</style>
</head>
<body>
	
<form id="form2"   action="registerdatabase.php" method="POST" >
				<h1 > Register </h1>
				<p> USN:</p>
				<input type="text" name="usn"  required > 
				<p>Name:</p>
				<input type="text" name="name"  required > 
				<p>Email ID:</p>   
				<input type="email" name="emailid" required >
				<p>Password :</p>
				<input type="password" name="password"  required > 
				<p>DoB:</p>
				<input type="date" name="dob"  required >
				<p>Branch:</p>
				<input type="text" name="branch"  required >
				<p>Year:</p>
				<input type="number" name="year"  required > 
				<p>Phone:</p>
				<input type="number" name="phone"  required >
				<button> Register  </button> 
			
			</form>
			</body>
			</html>