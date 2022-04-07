<?php
include 'header.php';
?>
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
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  
                    <center>
        <!-- Form validations -->
	<form method="POST" action="signup.php" class="form-validate form-horizontal" enctype="multipart/form-data">
		<center>
		
			
				<div>
					<h1 style="color: slategrey;">Registration Info.</h1>
				</div>
				<div class="form-group">
			<input type="text" class="form-control" style="width:300px;" name="fnam" placeholder="First name" required=""><br>
			<input type="text" class="form-control" style="width:300px;" name="lnam" placeholder="Last name" required=""><br>
			<input type="text" class="form-control" style="width:300px;" name="email" placeholder="Email Address" required=""><br>
			<input type="password" class="form-control" style="width:300px;" name="pass" placeholder="Password" required=""> <br>
			<input type="text" class="form-control" style="width:300px;" name="pno" placeholder="Phone No." required=""><br>
			<input type="text" class="form-control" style="width:300px;" name="haddress" placeholder="Home Address" required=""><br>
			<input type="date" class="form-control" style="width:300px;" name="datee" placeholder="Date of Birth" required=""><br>
			<select name="gender" class="form-control" style="width:300px;" required="">
			<option value="" selected disabled>Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			</select><br>
			<select name="dept" class="form-control" style="width:300px;" required="">
			<option value="">Sector/Ministry</option>
			  <?php
include "../dbconnect.php";

$sq1 = "SELECT * FROM category";
$do = mysqli_query($con,$sq1);
if ($do) {
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $category = $row['category'];
echo "
                 <option value='$category'>$category</option>
                ";
            }
        }
?>
			</select><br>
			<input type="file" class="form-control" style="width:300px;" name="img" required="">
						<br><br>
			<input type="submit" name="sub" class="btn btn-primary" value="Register"/>
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
<?php
include 'footer.php';
?>
