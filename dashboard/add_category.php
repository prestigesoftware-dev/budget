<?php include 'header.php'; ?>

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-plus"></i> Add Category</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-plus"></i>Add Category</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="">
                    <center>
                      <div class="form-group">

                        <input name="secname" class="form-control" placeholder="Ministry/Sector Name" style="width: 500px;" type="text" required="">
                      <br>
                        <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-primary" type="submit" name="sub">Add</button>
                          
                        </div>
                      </div>
                    </center>
                  </form>
                </div>
                  <?php
if (isset($_POST['sub'])){
  $pname= $_POST['secname'];
  $pname = strtoupper($pname);
  include '../dbconnect.php';
   $sql = $con->query("SELECT * FROM category WHERE category = '$pname'");
    if ($sql->num_rows > 0){
      while($row = $sql->fetch_assoc()) {

        $category = $row['category'];

        if ($pname == $category){

          echo "<script>alert('Sector/Ministry Already Exist'); window.location = index.php</script>";
        }
        
    }
  }
    else{
       //echo "46";
    $sql1 = "INSERT INTO category(category) VALUES ('$pname')";
      $do1 = mysqli_query($con,$sql1);
      if ($do1){
        echo "<script>alert('Success'); window.location = index.php</script>";
      }
    }
     
      
        }
   
   

  
?>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->

<?php include 'footer.php'; ?>