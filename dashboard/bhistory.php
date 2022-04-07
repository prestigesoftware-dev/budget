<?php include 'header.php';?>

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Budget History</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-th-list"></i> View Budget History</li>
            </ol>
          </div>
        </div>
    <div class="row">
          <div class="col-lg-12">
            <section class="panel">

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th> Code</th>
                    <th> Description</th>
                     <th> Budget Year</th>
                    <th> Cost</th>
                    <th> Submitted Date</th>
                    <th> Action</th>
                  </tr>
                   <?php
include "../dbconnect.php";
$dept= $_SESSION['dept'];
$sq1 = "SELECT * FROM budget where sta=1 AND orgname = '$dept' ";
$do = mysqli_query($con,$sq1);
if ($do) {
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $id = $row['id'];
    $description = $row['description'];
    $cost = $row['cost'];
    $yrs=$row['yrs'];
    $datee= $row['datee'];
    $fsta=$row['fsta'];
    $rep = report($id);
    if ($fsta == 0 || $fsta == ""){
      $sta = "<a class=\"btn btn-danger\" title='Cancel' href=\"cancel.php?xyzz=$id\">X</a>";
    }
    else {
      if ($id == $rep) {
        $sta = "<a class=\"btn btn-success\" target=\"_blank\" href=\"download.php?qaz=$id\">Download Report</a>";
      }
      else {
        $sta = "<a class=\"btn btn-primary\" title='Upload Report' href=\"report.php?abxx=$id\">Upload Report</a>";
      }
    }
            echo "
<tr>
                    <td>$id</td>
                    <td>$description</td>
                    <td>$yrs</td>
                    <td>$cost</td>
                    <td>$datee</td>
                    <td>
                      <div class=\"btn-group\">
                        $sta
                      </div>
                    </td>
                  </tr>
                ";
            }

        
        }

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