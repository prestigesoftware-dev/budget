<?php
if (isset($_POST['sub'])){
	$catname =$_POST['catname']; 
	$secname = $_POST['secname'];

	$sql = "SELECT * FROM `category`";
	if (!$do){
		while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)){

			$sql1 = "INSERT INTO `category`(`category`, `sector`, `budget`) VALUES ('$catnam', '$secnam','$subject');";
			$do1 = mysqli_query($con,$sql1);


		if ($do){
			echo "<script> alert('Success'); window.location = 'dashboard/'</script>";
		}
		}
		else{
		echo "<script>alert('Error'); window.location = createb.php</script>";
	}
		}
		
	}
	
?>