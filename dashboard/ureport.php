<?php include 'header.php';?>

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Budget Report</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-th-list"></i>Budget Report</li>
            </ol>
          </div>
        </div>
    <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <form method="POST">
              <select name="yearbudget" id="yearbudget" class="form-control">
                <option selected disabled>Select Year</option>
              <?php
              include "../dbconnect.php";
$orgname=$_SESSION['dept'];
$sq1 = "SELECT DISTINCT yrs FROM budget where orgname='$orgname' AND sta=1";
$do = mysqli_query($con,$sq1);
if ($do) {
  $sum = 0;
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
   
    $yrs=$row['yrs'];
    
  echo "
        <option value='$yrs'>$yrs</option>
  " ;
            }
          }
              ?>
             </select><br>
             <div class="col-lg-12" align="right">
             <input type="submit" name="report" class="btn btn-primary" value="Search"/>
           </div>
           </form>
           <!-- <div class="col-lg-12" align="right">
           <button type="button" name="printBtn" id="printBtn" onclick="printDiv('print')">
                          <i class="fa fa-print"></i>
                         
                      </button>
                    </div> -->
             <div class="col-lg-12" align="center" name="print" id="print">
              
                <?php
                if (isset($_POST['report'])){
$year= $_POST['yearbudget'];
$sq1 = "SELECT * FROM budget where yrs='$year' AND orgname='$orgname' AND sta=1";
$do = mysqli_query($con,$sq1);
if ($do) {
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $fsta=$row['fsta'];
    if ($fsta == 1){
      $status = "Approved";
    }
    else{
      $status = "UnApproved";
    }
  }
}
  echo "
  <div class=\"col-lg-12\" align=\"center\">
  <img src=\"../img/logo.png\" height=\"100\" width=\"80\" />
              <h1>Lagos State Government</h1>
              <h3>$orgname</h3>
              <h5>$yrs $status Budget </h5>
              </div>
               <table class=\"table table-striped table-advance table-hover\">
                <tbody name=\"budgetprint\">
        <tr>
                   
                    <th> Description </th>
                    <th> Cost</th>
                  </tr>
  ";
$sql =  "SELECT distinct orgname FROM budget where orgname='$orgname' AND yrs='$year' AND sta=1";
$do = mysqli_query($con,$sql);
if ($do) {
  $sum = 0;
  $total=0;
  $sn=1;

  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $oname = $row['orgname'];
    $sum=rep($oname,$year);
    $total += $sum;
}
  echo "
            <tr>
        <th>TOTAL</th>
        <th>$total</th>
        </tr>
          </tbody>
              </table>
            ";
}

                }
                  function rep($oname,$year){
                     include "../dbconnect.php";
    $sql = "SELECT * FROM budget where orgname='$oname' AND yrs='$year' AND sta=1";
$do = mysqli_query($con,$sql);
if ($do) {
  $sum = 0;
  $sn=1;

  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $description = $row['description'];
    $cost = $row['cost'];
    $sum += $cost;
    echo "
        <tr>
        <td>$description</td>
        <td>$cost</td>
        </tr>
      ";
            }
            

    
              return $sum;
          }
      
  }

  
?>
              
             </div>
            </section>
          </div>
        </div>
       </div>
      </div>
     <!-- page end-->
    </section>
  </section>
 <!--main content end-->
 
<?php include'footer.php';?>