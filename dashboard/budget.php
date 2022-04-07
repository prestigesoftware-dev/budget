<?php
if (isset($_POST['submit'])){
  $count= $_POST['count'];
  $id = $_POST['id'];
   $yrs = $_POST['yrs'];
  $datee = date('d/M/Y');
  $orgname = $_POST['orgname'];
  include '../dbconnect.php';
  for ($a=0; $a<=$count; $a++){
    $description = $_POST['description'.$a];
    $cost = $_POST['cost'.$a];
    $sql1 = "INSERT INTO budget(id, orgname, description, cost, yrs, datee, sta) VALUES ('$id','$orgname','$description','$cost', '$yrs' ,'$datee', '0')";
      $do1 = mysqli_query($con,$sql1);
    }
     if ($do1){
        echo "<script>alert('Success'); window.location = 'index.php'</script>";
      }
  }
       
  
?>