<!DOCTYPE html>
<html>
<head>
	<title>Budgets</title>
</head>
<body>
	<style>
		table, th, td {
	    	border: 1px solid black;
	    	border-collapse: collapse;
		}
		th, td {
	    	padding: 10px;
		}
	</style>
	<table align="center" style="width:80%">
		<tr>
			<td>Codes</td>
			<td>Descriptions</td>
			<td>Total</td>
		</tr>
		</table>
	<br>
	<br>

	<center>
	<form method="POST" >
	<input type="num" name="code" placeholder="Code" readonly="">
	<input type="text" name="dcrpt" placeholder="Descriptions">
	<input type="num" name="total" placeholder="Total">
	<input type="submit" name="sub" value="+">
</form>
</center>
	<table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Striped Table
              </header>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
              <section class="panel">
              <header class="panel-heading">
                Striped Table
              </header>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Users</th>
                    <th>Previledge</th>
                    <th>Sectors</th>
                    <th>Budgets</th>
                    <th>Previledge Settings</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
            </table>
            <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-book-open"></i> Pricing</h3>
                                    <!-- Switcher -->
                                    <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                                </div>

                                <!-- Switcher ON-OFF Content -->
                                <div class="switcher-content">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="pricing-list-container">
                                                <tr class="pricing-list-item pattern">
                                                    <td>
                                                        <div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
                                                        <div class="fm-input pricing-name"><input type="text" placeholder="Title" /></div>
                                                        <div class="fm-input pricing-ingredients"><input type="text" placeholder="Description" /></div>
                                                        <div class="fm-input pricing-price"><input type="text" placeholder="Price" data-unit="USD" /></div>
                                                        <div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <a href="#" class="button add-pricing-list-item">Add Item</a>
                                            <a href="#" class="button add-pricing-submenu">Add Category</a>
                                        </div>
                                    </div>

                                </div>
                                <!-- Switcher ON-OFF Content / End -->
                            </div>
                            <!-- Section / End -->
            
</body>
</html>