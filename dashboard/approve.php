 <?php
include "../dbconnect.php";
$id = $_GET['xyzz'];
$sq1 = "UPDATE budget SET fsta=1 WHERE id='$id'";
$do = mysqli_query($con,$sq1);
if ($do) {
  			echo "<script>alert('Success'); window.location = 'index.php'</script>";
        }

   ?>