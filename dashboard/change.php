<?php include'header.php'; ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-plus"></i> Create Budget</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-plus"></i>Create Budget</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  <?php
                    $id = $_GET['xyzz'];
                  ?>
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="budget1.php">
                    <center>
                      <input type="text" name="orgname" value="<?php echo($_SESSION['dept']); ?>" style="display: none;">
                     
                        <table  cellspacing="10" cellpadding="10" >
                          <tr>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Cost</th>
                            <th></th>
                          </tr>
                          <?php
                              include "../dbconnect.php";

$sq1 = "SELECT * FROM budget where id=$id";
$do = mysqli_query($con,$sq1);
if ($do) {
  $count = 0;
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $id = $row['id'];
    $description = $row['description'];
    $cost = $row['cost'];
    $sn = $row['sn'];
    $yrs=$row['yrs'];
    
            echo "
 <tr>
                            <td>
                            <input type=\"text\" name=\"id\" class=\"form-control\" readonly value=\"$id\"></td>
                            <td><textarea name=\"description\" class=\"form-control\"  placeholder=\"Summary for the Budget\" style=\"width:400px;\">$description</textarea></td>
                            <td>
                                <input type=\"number\" name=\"cost\" class=\"form-control\"  placeholder=\"Amount\" value=\"$cost\">
                           </td><td>
                                 
                            </td>
                          </tr>
                ";
                
        }
      }
                          ?>
                         
                        </table>

                      
                     <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  </center>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->

<script>
  $('#add').click(function () {
    var count = document.getElementById('count').value;
    count = parseInt(count) + 1;
    id= 'id' + count;
    description = 'description' + count;
    cost = 'cost' + count;
    var table = $(this).closest('table');
     table.append('<tr id="tr"><td><input type="text" name='+id+'class="form-control" readonly  value="<?php echo ($id); ?>"></td><td><textarea name='+description+' class="form-control"  placeholder="Summary for the Budget" style="width:400px;"></textarea></td><td><input type="number" name='+cost+' class="form-control" placeholder="Amout" onkeyup="total();"></td></tr>');
  // var count = document.getElementById('count').value;
   // count = parseInt(count) + 1;
    document.getElementById('count').value = count;
});




</script>

<?php include'footer.php';?>