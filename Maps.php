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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Pharmacy | Local Pharmacies</title>
    </head>
<body>

<?php
session_start();

if ($_SESSION['logged_in'] == 0){
    header('Location: Login.php');
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
	                        <a href="overview.php">
	                            <i class="fa fa-folder"></i>
	                            <span>Overview</span>
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
    <div class="container" id="map-container">
        <div class="row my-row d-flex justify-content-center align-items-center">
            <div class="col-12 d-flex justify-content-center align-top" id="pharmacy-h3">
                <h3 class="align-top">The Nearest Pharmacy</h3>
            </div>

            <div class="col-lg-12 col-sm-12 d-flex justify-content-end" id="pharmacy-map">
                <div class="container map-container">
                        <iframe class="googlemap" frameborder="0" scrolling="no" src="https://maps.google.com/maps?q=glasgow%20caledonian%20university&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
        </div>
            <div class="container card-box">
                <div class="row">
                    <div class="col-2 mx-auto side-row text-wrap body-white">
                    <div class="card no-border">
                        <div class="card-body" style="padding-left: 5px;padding-right: 2px;">
                            <b>High Street Pharmacy (Glasgow)</b>
                            <p>128 High Street
                                <br>G1 1PQ
                                <br>Tel: 0141 552 5929
                            </p>
                        </div></div>
                </div>
                    <div class="col-2 mx-auto side-row text-wrap body-white">
                        <div class="card no-border">
                            <div class="card-body" style="padding-left: 5px;padding-right: 2px;">
                                <b>Govanhill Pharmacy Ltd</b>
                                <p>Govanhill Health Centre
                                    <br>G42 7DR
                                    <br>Tel: 0141 423 5530
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mx-auto side-row text-wrap body-white">
                        <div class="card no-border">
                            <div class="card-body" style="padding-left: 5px;padding-right: 2px;">
                                <b>High Street Pharmacy (Glasgow)</b>
                                <p>128 High Street
                                    <br>G1 1PQ
                                    <br>Tel: 0141 552 5929
                                </p>
                            </div></div>
                    </div>
                    <div class="col-2 mx-auto side-row text-wrap body-white">
                        <div class="card no-border">
                            <div class="card-body" style="padding-left: 5px;padding-right: 2px;">
                                <b>Govanhill Pharmacy Ltd</b>
                                <p>Govanhill Health Centre
                                    <br>G42 7DR
                                    <br>Tel: 0141 423 5530
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mx-auto side-row text-wrap body-white">
                        <div class="card no-border">
                            <div class="card-body" style="padding-left: 5px;padding-right: 2px;">
                                <b>High Street Pharmacy (Glasgow)</b>
                                <p>128 High Street
                                    <br>G1 1PQ
                                    <br>Tel: 0141 552 5929
                                </p>
                            </div></div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>