<?php include 'header.php'; ?>

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-plus"></i> Update Category</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-plus"></i>Update Category</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <?php
        $id = $_GET['xyzz'];
            include '../dbconnect.php';
   $sql = $con->query("SELECT * FROM category WHERE id = '$id'");
    if ($sql->num_rows > 0){
      while($row = $sql->fetch_assoc()) {

        $category = $row['category'];
        
    }
  }
        ?>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" method="POST" action="editcategory1.php">
                    <center>
                      <div class="form-group">
                         <input name="id" class="form-control" placeholder="Ministry/Sector Name" style="width: 500px; display:none;" type="text" value="<?php echo $id; ?>" required="">
                        <input name="secname" class="form-control" placeholder="Ministry/Sector Name" style="width: 500px;" type="text" value="<?php echo $category; ?>" required="">
                      <br>
                        <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-primary" type="submit" name="sub">Update</button>
                          
                        </div>
                      </div>
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

<?php include 'footer.php'; ?>