


	
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
					border:  thin solid white;
					padding: 50px 50px 50px 50px;
					color:white;
				}
				body {
   background-image: url("placements1.jpg");
   background-color: blue;
}

				</style>
				</head>
<body bgcolor="grey">
<div style="margin-left:25%;padding:40px  40px 40px 250px;height:700px;">
  <h1> ADD COMPANY DETAILS</h1></br>
		<form id="form1"   action="addcompany1.php" method="POST" href="home.php"  >
				
				
				
				<p> ConpanyName:</p>
				<input type="text" name="companyname"  required /> 
				<p> company type:</p>
				<input type="text" name="companytype"  required /> 
				<p> branch:</p>
				
				<input type="text" name="branch"  required /> 
				

				<p>qualification:</p>
				<input type="text" name="qualification"  required  /> 
				<p> cutoff:</p>
				<input type="number" name="cutoff" step="0.01"  required /> 
				
				<p> package:</p>
				<input type="number" name="package" step="0.01"  required /> 
				<br />
				</br>
				<button> Add </button> 
			
			</form>
		
		
</div>
</body>
</html>