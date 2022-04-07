<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Budget</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style type="text/css">
    .plus {
  position:relative;
  border: 1px dotted white;
  width: 3px;
  height: 3px;
  background-color: blue;
  box-sizing: border-box;
  transform: scale(11);
}

.removebutton{
   background: none!important;
  border: none;
  padding: 0!important;
  /*optional*/
  font-family: arial, sans-serif;
  /*input has OS specific font-family*/
  color: #069;
  text-decoration: underline;
  cursor: pointer;
}
@media print {
#printable{
     display:flex;
     justify-content:center;
     align-items:center;
     height:100%;
     }
    html, body{
      height:100%;
      width:100%;
    }
}
  </style>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">Dashboard </a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>
      
             
           

      <div class="top-nav notification-row">

        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <?php
          $dept =  $_SESSION['dept'];
          ?>
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="../<?php echo $_SESSION['photo']; ?>" style="height: 40px; width: 40px;">
                            </span>
                            <span class="username"><?php echo $_SESSION['fnam'] .'  ' . $_SESSION['lnam']; ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="profile.php"><i class="icon_key_alt"></i>My Profile</a>
              </li>
              <li class="eborder-top">
                <a href="../"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="../dashboard">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>

          <?php

          if ($dept == "Admin"){
             echo "
              <li class=\"sub-menu\">
            <a href=\"javascript:;\" class=\"\">
                          <i class=\"icon_document_alt\"></i>
                          <span>Categories</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
            <ul class=\"sub\">
              <li><a class=\"\" href=\"add_category.php\">Add Category</a></li>
              <li><a class=\"\" href=\"edit_category.php\">Category List</a></li>
            </ul>
          </li>
          ";
          }
         if ($dept != "Admin"){
          echo "
              <li>
          <a class=\"\" href=\"createb.php\">
            <i class=\"icon_plus\"></i>
            <span>Create Budget</span>
          </a>
          </li>
          <li>
          <a class=\"\" href=\"editb.php\">
            <i class=\"icon_document_alt\"></i>
            <span>Budgets</span>
          </a>
          </li>
           <li>
          <a class=\"\" href=\"bhistory.php\">
            <i class=\"icon_documents_alt\"></i>
            <span>Budget History</span>
           </a>
           </li>
            <li>
          <a class=\"\" href=\"ureport.php\">
            <i class=\"icon_documents_alt\"></i>
            <span>Report</span>
           </a>
           </li>
          ";
        }
          ?>
         
         

           <?php
             if ($dept == "Admin"){
          echo "
           <li>
          <a class=\"\" href=\"badminhistory.php\">
            <i class=\"icon_documents_alt\"></i>
            <span>Budget History</span>
           </a>
           </li>
           <li>
          <a class=\"\" href=\"areport.php\">
            <i class=\"icon_documents_alt\"></i>
            <span>Report</span>
           </a>
           </li>
             <li class=\"sub-menu\">
            <a href=\"javascript:;\" class=\"\">
                          <i class=\"icon_profile\"></i>
                          <span>Profile</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
            <ul class=\"sub\">
              <li><a class=\"\" href=\"reg.php\"> <i class=\"icon_plus\"></i>Add New User(s)</a></li>
              <li><a href=\"reg_list.php\"><i class=\"icon_profile\"></i>List of Users</a></li>
            </ul>
          </li>";
        }
           ?>
          
           </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->