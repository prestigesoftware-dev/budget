<?php
session_start();
include 'header.php';
?>
 <div class="container login-container">
     
                <div class="col-md-6 login-form-2">
                    <h3>Login Here</h3>
                    <form method="POST" action="signin.php">
                     <?php 
                      if (isset($_SESSION['error'])){
                          echo $_SESSION['error'];
                      }
                      session_destroy();
                     ?>
                        <div class="form-group">
                            <p>E-mail <input type="text" name="email" class="form-control" placeholder="Your Email" required></p>
                        </div>
                        <div class="form-group">
                             <p>Password <input type="password" id="password" name="pass" class="form-control" placeholder="Your Password" required></p>
                              <p align="right"><input type="checkbox" onclick='myFunction();'/> Show Password </p>
                        </div>
                        <div class="form-group">
                            <button name="sub" class="tg-btn">Login</button>
                        </div>
                       
                    </form>
                </div>
               
            </div>
        </div>
        

 </center>
 <script>
      function myFunction() {
  var x = document.getElementById("password");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
 </script>
	
<?php
include 'footer.php';
?>