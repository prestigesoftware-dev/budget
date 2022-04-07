<?php
include 'header.php';
?>
	<form method="POST" action="signup.php" class="form-group" enctype="multipart/form-data">
		<div style="text-align: center;">
			
				<div>
					<h1 style="color: slategrey;">Registration Info.</h1>
				</div>
			First Name:
			<input type="text" class="m-md-03" name="fnam" placeholder="First name" required="">
			<br>
			<br>
			Last Name:
			<input type="text" class="m-md-03" name="lnam" placeholder="Last name" required="">
			<br>
			<br>
			Email Address:
			<input type="text" class="m-md-03" name="email" placeholder="Email Address" required="">
			<br>
			<br>
			Password:
			<input type="password" class="m-md-03" name="pass" placeholder="Password" required="">
			<br>
			<br>
			Phone Number:
			<input type="text" class="m-md-03" name="pno" placeholder="Phone No." required="">
			<br>
			<br>
			Home Address:
			<input type="text" class="m-md-03" name="haddress" placeholder="Home Address" required="">
			<br>
			<br>
			Date:
			<input type="date" class="m-md-03" name="date" placeholder="Date of Birth" required="">
			<br>
			<br>
			Gender:
			<select name="gender" class="m-md-03" required="">
			<option value="">Select</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			</select>
			<br>
			<br>
			<center>
			<input type="file" class="m-md-03" name="img" required="">
			</center>
			<br>
			<br>
			<input type="submit" name="sub" class="btn btn-primary" value="Submit"/>
		
		</div>
	</form>
<?php
include 'footer.php';
?>
