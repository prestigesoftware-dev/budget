<?php include'header.php'; ?>
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3> 
            <?php echo "<h3 align='right'>". $_SESSION['dept']."</h3>"; ?>
          </div>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../dashboard">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-money"></i>
              <div class="count">66,740</div>
              <div class="title">2020</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-money"></i>
              <div class="count">75,380</div>
              <div class="title">2019</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-money"></i>
              <div class="count">43,620</div>
              <div class="title">2018</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-money"></i>
              <div class="count">14,260</div>
              <div class="title">2017</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


        <div class="row">
          <!--div class="col-lg-9 col-md-12"-->

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body-map">
                <div id="map" style="height:380px;"></div>
              </div>

            </div>
          </div>

          <!-- chart morris start -->
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  <h3>General Chart</h3>
                      </header>
                      <div class="panel-body">
                        <div class="tab-pane" id="chartjs">
                      <div class="row">
                          <!-- Line -->
                          <div class="col-lg-12">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Line
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="line" height="300" width="1050"></canvas>
                                  </div>
                              </section>
                          </div>
                          
                      </div>
                     
                      <div class="row">

                          <!-- Doughnut -->
                          <div class="col-lg-12">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Doughnut
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="doughnut" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
                      </div>
                      </div>
                    </div>
                  </section></div></div></section></section></section>
                    </section>
              </section>
              <!-- chart morris end -->

        <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <!--script src="js/bootstrap.min.js"></script-->
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
<?php include'footer.php';?>