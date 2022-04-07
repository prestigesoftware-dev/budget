<?php
session_start();
if (isset($_POST['sub'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$email1=null;
	$pass1 = null;
	include'dbconnect.php';
	$sql = "SELECT * FROM reg WHERE email='$email' AND pass = '$pass';";
	$do = mysqli_query($con,$sql);
	if ($do){
		while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)){

			$email1 = $row['email'];
			$pass1 = $row['pass'];
			$fnam = $row['fnam'];
			$lnam = $row['lnam'];
			$pno = $row['pno'];
			$datee = $row['datee'];
			$haddress = $row['haddress'];
			$photo = $row['img'];	
			$dept = $row['dept'];
	}
	if ($email == $email1 && $pass == $pass1) {
			$_SESSION['email'] = $email1;
			$_SESSION['fnam'] = $fnam;
			$_SESSION['lnam'] = $lnam;
			$_SESSION['pno'] = $pno;
			$_SESSION['datee'] = $datee;
			$_SESSION['haddress'] = $haddress;
			$_SESSION['photo']='dashboard/'.$photo;
			$_SESSION['dept']=$dept;
			echo "<script> alert('Login Successful'); window.location = 'dashboard/';</script>";
		}
	else{
		$error=" <div class=\"alert alert-warning\">
                Invalid Username/Password
                      </div>";
		$_SESSION['error'] = $error;
	echo "<script> window.location='login.php';</script>";
	}
		}

		
	
			
	//echo (var_dump($sql));
	//exit();
}
?>