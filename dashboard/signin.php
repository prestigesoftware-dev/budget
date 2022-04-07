<?php
if (isset($_POST['catname'])){
	$catname = strtoupper('catname')

	$sql = "SELECT * FROM `category`";
	$do = mysqli_query($con,$sql);
	if (!$do){
		while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)){

			$sql1 = "INSERT INTO `category`(`category`, `sector`, `budget`) VALUES ([value-2],[value-3],[value-4])"

			$do1 = mysqli_query($con,$sql1);

			if ($do){

			} 

			//echo "<script> alert('Login Successful'); window.location = 'dashboard/'</script>";
		}

	}
		else{
		//echo "<script>alert('invalid Email/Password'); window.location = login.php</script>";
		}
	}
	
?>