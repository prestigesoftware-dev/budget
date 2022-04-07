<?php
$id = $_GET['qaz'];
include "../dbconnect.php";
$sq = "SELECT * FROM report where b_id=$id";
$chck = mysqli_query($con,$sq);
if ($chck) {
  while ($row = mysqli_fetch_array($chck,MYSQLI_ASSOC)) {
    $file = $row['filee'];
    
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <p style="text-align: center;"><a class="btn btn-success" href="<?php echo($file); ?>">Proceed To Download Report</a></p>
</body>
</html>