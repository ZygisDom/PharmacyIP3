<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pharmacy | Calendar</title>
</head>
<body>

<?php
session_start();

if ($_SESSION['logged_in'] == 0){
    header('Location: login.php');
}
?>

    <div class="page-wrapper theme-wrapper toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="Home.php">pharmacy</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-info">
                          <span class="user-name"><i class="fas fa-user"></i> &nbsp;&nbsp; &nbsp;&nbsp; <?php echo $_SESSION["username"]; ?></span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fa fa-search" aria-hidden="true"></i>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
	            <div class="sidebar-menu">
		            <ul>
			            <li class="header-menu">
				            <span>General</span>
			            </li>
			            <li class="sidebar-dropdown">
				            <a href="Home.php">
					            <i class="fa fa-tachometer-alt"></i>
					            <span>Home</span>
				            </a>
			            </li>
			            <li class="sidebar-dropdown">
				            <a href="StockManagement.php">
					            <i class="fas fa-truck"></i>
					            <span>Order Supplies</span>
				            </a>
			            </li>
			            <li class="sidebar-dropdown">
				            <a href="Stock.php">
					            <i class="fas fa-box-open"></i>
					            <span>Current Supplies</span>
				            </a>
			            </li>
			            <li class="sidebar-dropdown">
				            <a href="Charts.php">
					            <i class="fa fa-chart-line"></i>
					            <span>Charts</span>
				            </a>
			            </li>
			            <li class="sidebar-dropdown">
				            <a href="Maps.php">
					            <i class="fa fa-globe"></i>
					            <span>Maps</span>
				            </a>
			            </li>
			            <li class="sidebar-dropdown">
				            <a href="Calendar.php">
					            <i class="fa fa-calendar"></i>
					            <span>Calendar</span>
				            </a>
			            </li>
			            <li class="header-menu">
				            <span>Extra</span>
			            </li>
			            <li>
				            <a href="authors.php">
					            <i class="fa fa-book"></i>
					            <span>Project Authors</span>
				            </a>
			            </li>
			            <li>
				            <a href="#">
					            <i class="fa fa-folder"></i>
					            <span>Examples</span>
				            </a>
			            </li>
		            </ul>
	            </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="Login.php">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
    </div>
    <div class="container text-center vertical-center" id="container-calendar">
        <table class="table table-borderless" id="calendar">
            <thead>
            <tr style="border-top: none;">
                <th scope="col" style="border-top:none !important;">Su</th>
                <th scope="col" style="border-top:none !important;">Mo</th>
                <th scope="col" style="border-top:none !important;">Tu</th>
                <th scope="col" style="border-top:none !important;">We</th>
                <th scope="col" style="border-top:none !important;">Th</th>
                <th scope="col" style="border-top:none !important;">Fr</th>
                <th scope="col" style="border-top:none !important;">Sa</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">1</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" aria-disabled="true" data-toggle="tooltip" data-placement="top" title="Expected Delivery">2</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">3</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">4</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Expected Delivery">5</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">6</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">7</button></td>

                </tr>
                <tr>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">8</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Expected Delivery">9</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">10</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">11</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Expected Delivery">12</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">13</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">14</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">15</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Expected Delivery">16</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">17</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">18</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Expected Delivery">19</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">20</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">21</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">22</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Expected Delivery">23</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">24</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">25</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Expected Delivery">26</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">27</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">28</button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">29</button></td>
                    <td><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Expected Delivery">30</button></td>
                    <td><button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="No Expected Delivery">21</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>