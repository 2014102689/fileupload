<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Sign Up</title>
</head>
<body>
	<!--- Header Showcase-->
	<header class="header">
		<a href="index.php">
			<h1>Sign Up</h1>
		</a>
			<div class="drop">
				<div class="toggle">
					<span class="span1"></span>
	                <span class="span2"></span>
		        </div>
	        </div>  
	</header>

	<div class="form_wrap">
		<form action="transaction/signup.php" method="post">
			<input type="text" name="fname" placeholder="First name">
			<input type="text" name="mname"  placeholder="Middle name">
			<input type="text" name="lname"  placeholder="Last name"><br>
			<input type="text" name="address"  placeholder="Address"><br>
			<input type="date" name="DOB"  placeholder="Date of Birth"><br>
			<input type="text" name="POB"  placeholder="Place of Birth"><br>
			<div>Gender</div>
			<div>
				<input type="radio" name="Gender" value="Male">Male
				<input type="radio" name="Gender" value="Female">Female
				<input type="radio" name="Gender" value="LGBT">LGBTQ+<br>
			</div>	
			<input type="text" name="Guardian" placeholder="Gurdian"><br>
			<input type="tel" name="ContactNumber" placeholder="+639123456789"><br>
			<input type="text" name="CivilStatus" placeholder="Civil Status"><br>
			<input type="select" name="YearLevel" placeholder="Year Level"><br>
			<input type="select" name="Course" placeholder="Course"><br>
			<input type="text" name="SchoolYear" placeholder="School Year"><br>

			<input type="submit">
		</form>
	</div>

</body>
</html>