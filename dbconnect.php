<?php
$con = mysqli_connect("localhost","root","","budget");
	if (!$con){
		echo "<h2>Database Not Connected</h2>";
		exit();
	}
?>