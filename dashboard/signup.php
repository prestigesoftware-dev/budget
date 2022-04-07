<?php
if (isset($_POST['sub'])){
	$usrid= rand(00000,99999);
	$fnam =$_POST['fnam']; 
	$lnam= $_POST['lnam'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pno = $_POST['pno'];
	$haddress = $_POST['haddress'];
	$datee = $_POST['datee'];
	$gender = $_POST['gender'];
	$dept = $_POST['dept'];

	move_uploaded_file($_FILES['img']['tmp_name'],'img/' . $usrid . '.jpg');
	$location = 'img/' . $usrid . '.jpg';
	include'../dbconnect.php';

	$sql = "INSERT INTO reg (fnam, lnam, email, pass, pno, haddress, datee, gender, img, dept) VALUES ('$fnam','$lnam','$email','$pass','$pno','$haddress','$datee','$gender', '$location', '$dept');";
	
	//echo (var_dump($sql));
	//exit();
	
	$check = mysqli_query($con, $sql);
	if ($check){
		echo "<script>alert('Success'); window.location.href = 'reg.php'</script>";
	}
	else{
		echo "<script>alert('Error'); window.location.href = 'reg.php'</script>";
	}

}
?>