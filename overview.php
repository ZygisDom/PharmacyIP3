<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
	      crossorigin="anonymous">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Pharmacy | Overview</title>
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
		<!-- page-content" -->
	</div>
	<div class="container" style="margin-top:70px;margin-bottom:70px;">
			<div class="jumbotron">
				<h1 class="display-4 text-center">Overview</h1>
				<hr class="my-4">
				<p class="lead text-justify text-justify">Our proposed solution is tailored to independent and chain chemists supplying prescription medicines. This solution will implement a back of house web-based application that will manage stock,
					dispensing of medicines and as an innovative new feature that will drive adoption of this solution, as the main selling point we will implement a “Collaborative stockroom” between a network of branches to
					reduce waiting times and eliminate shortages of medicines.</p>
				<p class="lead text-justify">The situation will be a “back room” system, it will not deal directly with physical money, physical transactions and non-pharmacist staff. It will be updated by the front till about restricted medicines sold.
					The system will provide a core functionality in the following aspects:</p>
				<ul style="list-style-type:circle; margin-left: 2.8rem;">
					<li><p class="lead text-justify text-justify">A user-friendly dashboard that will provide the following functionality;</p></li>
					<li><p class="lead text-justify">Operations regarding stock (Removing, adding, tracking, ordering);</p></li>
					<li><p class="lead text-justify">Patient details (Prescription status, name, ID);</p></li>
					<li><p class="lead text-justify">Patient database;</p></li>
					<li><p class="lead text-justify">A link to the front till to handle what is being sold and will update stock as it changes;</p></li>
					<li><p class="lead text-justify">A “Collaborative stockroom” which is our innovative new idea;</p></li>
					<li><p class="lead text-justify">A map feature that allows pharmacists to input types of medicine, or upload a prescription, this will then direct the pharmacist as to where the prescription can be filled the quickest
						to reduce waiting times;</p></li>
				</ul>
				<br><br><p class="lead text-justify">We have not implemented all of these features as we are focusing more heavily on the documentation aspect of this project (30% implementation 70% documentation) and we feel we have
					comprehensively covered the features listed above, in the documentation as well as justifications for their inclusions.</p>
			</div>
	</div>
</body>
</html>