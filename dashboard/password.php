 <?php

  $id =$_GET['xyzz'];
  include '../dbconnect.php';
 $sql1 = "UPDATE reg SET pass='1234567' WHERE id = '$id'";
      $do1 = mysqli_query($con,$sql1);
      if ($do1){
        echo "<script>alert('Success: The New Password is 1234567'); window.location = 'index.php'</script>";
      }

 
?>