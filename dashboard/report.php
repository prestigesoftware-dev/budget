<?php include 'header.php'; ?>

<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-plus"></i> Report</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-plus"></i>Upload Report</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" enctype="multipart/form-data" id="feedback_form" method="POST" action="">
                    <center>
                      <div class="form-group">

                        <input name="upl" class="form-control" placeholder="Ministry/Sector Name" style="width: 500px;" type="file" required="">
                      <br>
                        <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-primary" type="submit" name="sub">Upload</button>
                          
                        </div>
                      </div>
                    </center>
                  </form>
                </div>
                  <?php
if (isset($_POST['sub'])){
  $rid = $_GET['abxx'];
  include '../dbconnect.php';
   $sql = $con->query("SELECT * FROM report WHERE b_id = '$rid'");
    if ($sql->num_rows > 0){
      while($row = $sql->fetch_assoc()) {

        $r_id = $row['b_id'];

        if ($rid == $r_id){

          echo "<script>alert('Report File Already Uploaded'); window.location = index.php</script>";
        }
        
    }
  }
    else{
       //echo "46";
      $location = 'pdf/';
      $pdf = $location . $rid . ".pdf";
      $errors= array();
      $file_name = $_FILES['upl']['name'];
      $file_size = $_FILES['upl']['size'];
      $file_tmp = $_FILES['upl']['tmp_name'];
      $file_type = $_FILES['upl']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['upl']['name'])));
      
      $expensions= array("docx","doc","pdf");
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a docx or pdf file.";
      }
      if(empty($errors)==true) {
        $sql1 =$con->query("INSERT INTO report(b_id, filee) VALUES ('$rid','$pdf')");
        if ($sql1){
          move_uploaded_file($_FILES['upl']['tmp_name'], $pdf);
          echo "<script>alert('Successfully Uploaded'); window.location = index.php</script>";
        }
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