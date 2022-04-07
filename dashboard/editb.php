<?php include 'header.php';?>

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Edit Budget</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-th-list"></i>Edit Budget</li>
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
$sq1 = "SELECT * FROM budget where sta=0 AND orgname = '$dept' ";
$do = mysqli_query($con,$sq1);
if ($do) {
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $id = $row['id'];
    $description = $row['description'];
    $cost = $row['cost'];
    $yrs=$row['yrs'];
    $datee= $row['datee'];

            

            echo "
<tr>
                    <td>$id</td>
                    <td>$description</td>
                    <td>$yrs</td>
                    <td>$cost</td>
                    <td>$datee</td>
                    <td>
                      <div class=\"btn-group\">
                        <a class=\"btn btn-primary\"  title='Edit' href=\"change.php?xyzz=$id\"><i class=\"icon_plus_alt2\"></i></a>
                        <a class=\"btn btn-success\"  title='Submit' href=\"submit.php?xyzz=$id\"><i class=\"icon_check_alt2\"></i></a>
                      </div>
                    </td>
                  </tr>
                ";
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