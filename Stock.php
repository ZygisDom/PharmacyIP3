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
	<title>Pharmacy | Current Stock</title>
</head>
<body>

<?php
session_start();

if ($_SESSION['logged_in'] == 0){
    header('Location: Login.php');
}

// Establishing connection to the database
$conn = mysqli_connect("localhost", "root", "", "pharmacydb");
mysqli_select_db($conn, "pharmacydb");

$query = mysqli_query($conn,"select Qty from medicine order by ID_Medicine asc");

$stock = array();
for($i=0;$i < 10; $i++){
    $row = mysqli_fetch_row($query);
    $stock[] = $row[0];
}

$_SESSION["AmoxicillinQty"] = $stock[0];
$_SESSION["CetirizineQty"] = $stock[1];
$_SESSION["ClindamycinQty"] = $stock[2];
$_SESSION["ClopidogrelQty"] = $stock[3];
$_SESSION["DiclofenacQty"] = $stock[4];
$_SESSION["DomperidoneQty"] = $stock[5];
$_SESSION["DulcolaxQty"] = $stock[6];
$_SESSION["FluoxetineQty"] = $stock[7];
$_SESSION["GabapentinQty"] = $stock[8];
$_SESSION["LisinoprilQty"] = $stock[9];


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
	<div class="container" id="card-container">
		<div class="card card-margin" style="margin-top:50px;">
			<div class="card-body">
				Amount of Amoxicillin currently in Stock: <?php echo $_SESSION["AmoxicillinQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Cetirizine currently in Stock: <?php echo $_SESSION["CetirizineQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Clindamycin currently in Stock: <?php echo $_SESSION["ClindamycinQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Clopidogrel currently in Stock: <?php echo $_SESSION["ClopidogrelQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Diclofenac currently in Stock: <?php echo $_SESSION["DiclofenacQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Domperidone currently in Stock: <?php echo $_SESSION["DomperidoneQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Dulcolax currently in Stock: <?php echo $_SESSION["DulcolaxQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Fluoxetine currently in Stock: <?php echo $_SESSION["FluoxetineQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Gabapentin currently in Stock: <?php echo $_SESSION["GabapentinQty"]; ?>
			</div>
		</div>
		<div class="card card-margin">
			<div class="card-body">
				Amount of Lisinopril  currently in Stock: <?php echo $_SESSION["LisinoprilQty"]; ?>
			</div>
		</div>
	</div>
</body>
</html>