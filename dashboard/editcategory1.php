 <?php
if (isset($_POST['sub'])){
  $pname =$_POST['secname'];
  $id =$_POST['id'];
  include '../dbconnect.php';
 $sql1 = "UPDATE category SET category='$pname' WHERE id = '$id'";
      $do1 = mysqli_query($con,$sql1);
      if ($do1){
        echo "<script>alert('Success'); window.location = 'index.php'</script>";
      }

   }
   
  
  
   
   

  
?>