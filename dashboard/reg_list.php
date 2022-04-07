<?php include 'header.php'; ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Edit Category</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Edit Category</li>
            </ol>
          </div>
        </div>
        <section class="panel">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Fullname</th>
                    <th>Gender</th>
                    <th>Phone No.</th>
                    <th>Address</th>
                    <th>Reset Password</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
include "../dbconnect.php";

$sq1 = "SELECT * FROM reg WHERE dept != 'Admin'";
$do = mysqli_query($con,$sq1);
if ($do) {
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $fullname = $row['lnam']. ' ' . $row['fnam'];
    $gender = $row['gender'];
    $pno = $row['pno'];
    $haddress = $row['haddress'];
    $id = $row['id'];
echo "
                 <tr>
                    <td>$fullname</td>
                    <td>$gender</td>
                    <td>$pno</td>
                    <td>$haddress</td>
                    <td><a href=\"password.php?xyzz=$id\"><span class=\"label label-success\">Reset</span></a></td>
                  </tr>
                ";
            }
        }
?>

                 
                </tbody>
            </table>
          </section>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->

<?php include 'footer.php'; ?>