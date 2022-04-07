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
                    $id = rand(000000,999999);
                  ?>
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="budget.php">
                    <center>
                      <input type="text" name="orgname" value="<?php echo($_SESSION['dept']); ?>" style="display: none;">
                      <select class="form-control" name="yrs">
                        <option disabled selected >Select Year</option>
                        <?php 
                            for ($a=2020; $a<=2025; $a++){
                              echo "
                                <option value=$a>$a</option>
                              ";
                            }
                         ?>
                       </select>
                        <table  cellspacing="10" cellpadding="10" >
                          <tr>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Cost</th>
                            <th><input type="text" name="count" id="count" value="0" style="display:none;"></th>
                          </tr>
                          <tr>
                            <td><input type="text" name="id" class="form-control" readonly  value="<?php echo($id); ?>"></td>
                            <td><textarea name="description0" class="form-control"  placeholder="Summary for the Budget" style="width:400px;"></textarea></td>
                            <td>
                                <input type="number0" name="cost0" id="cost0" class="form-control"  placeholder="Amount">
                           </td><td>
                                  <a class="" id="add" name="add" ><i class="icon_plus" style="font-size:25px;"></i></a>
                            </td>
                          </tr>
                        </table>
                       
                      
                     <button type="submit" name="submit" class="btn btn-primary">Save</button>
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