<?php
if (isset($_POST['submit'])){
  // $count= $_POST['count'];
  // $sncount = $_POST['sncount'];
  $id = $_POST['id'];
  // $yrs = $_POST['yrs'];
  // $datee = date('y/M/d');
  // $orgname = $_POST['orgname'];
  $description = $_POST['description'];
  $cost = $_POST['cost'];
  include '../dbconnect.php';
  /*for ($a=1; $a <= $sncount; $a++){
    $description = $_POST['description'.$a];
    $cost = $_POST['cost'.$a];
    $sn=$_POST['sn'.$a];
  }

  for ($a=$sncount; $a<=$count; $a++){
    $description = $_POST['description'.$a];
    $cost = $_POST['cost'.$a];
    $sql1 = "INSERT INTO budget(id, orgname, description, cost, yrs, datee, sta) VALUES ('$id','$orgname','$description','$cost', '$yrs' ,'$datee', '0')";
      $do1 = mysqli_query($con,$sql1);
    }*/
     $sql = "UPDATE budget SET description='$description',cost='$cost' WHERE id='$id'";
      $do = mysqli_query($con,$sql);
     if ($do){
        echo "<script>alert('Success'); window.location = 'index.php'</script>";
      }
  }
       
  
?>