<?php include 'header.php';?>

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Budget History</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-th-list"></i>View Budget History</li>
            </ol>
          </div>
        </div>
    <div class="row" id="print" name="print">
          <div class="col-lg-12">
            <section class="panel">

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th> Code</th>
                    <th> Department</th>
                    <th> Description</th>
                     <th> Budget Year</th>
                    <th> Cost</th>
                    <th> Submitted Date</th>
                     <th> Status</th>
                    <th> Action</th>
                  </tr>
                   <?php
include "../dbconnect.php";
$dept= $_SESSION['dept'];
$sq1 = "SELECT * FROM budget WHERE sta = 1";
$do = mysqli_query($con,$sq1);
if ($do) {
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $id = $row['id'];
    $orgname = $row['orgname'];
    $description = $row['description'];
    $cost = $row['cost'];
    $yrs=$row['yrs'];
    $datee= $row['datee'];
    $sta=$row['sta'];
    $fsta=$row['fsta'];
    $rep = report($id);
      

        if ($fsta == 0 || $fsta == ""){
      $sta = "Submitted";
      $tabl = "<td>
                      <div class=\"btn-group\">
                         <a class=\"btn btn-success\"  title='Approve' href=\"approve.php?xyzz=$id\"><i class=\"icon_check_alt2\"></i></a>
                        <a class=\"btn btn-danger\"  title='Cancel' href=\"cancel.php?xyzz=$id\">X</a>
                      </div>
                    </td>";
    }
    else {
      $sta = "Approved";
      if ($id == $rep) {
      $tabl = "<td>
                      <div class=\"btn-group\">
                         <a class=\"btn btn-success\" target=\"_blank\" href=\"download.php?qaz=$id\">Download Report</a>
                      </div>
                    </td>";
      }
      else {
        $tabl = "<td class=\"btn btn-info\"  title='Cancel'>Report Processing</td>";
      }
    }
            echo "
<tr>
                    <td>$id</td>
                    <td>$orgname</td>
                    <td>$description</td>
                    <td>$yrs</td>
                    <td>$cost</td>
                    <td>$datee</td>
                    <td>$sta</td>
                    $tabl
                  </tr>
                ";
        }   }

        function report($id) {
          include "../dbconnect.php";
          $sq = "SELECT * FROM report where b_id=$id";
          $chck = mysqli_query($con,$sq);
          if ($chck) {
            while ($row = mysqli_fetch_array($chck,MYSQLI_ASSOC)) {
              $r_id = $row['b_id'];
              return $r_id;
            }
          }
        }
?>
                  
                </tbody>
              </table>
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