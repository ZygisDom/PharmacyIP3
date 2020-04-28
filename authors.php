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
	<title>Pharmacy | Authors</title>
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
	<div class="container">
		<div class="row justify-content-center" style="margin-top:70px;">
			<div class="col-lg-4 col-xs-12 align-self-center">
				<div class="card bg-light mb-3 mx-auto mx-auto" style="max-width: 18rem;">
					<div class="card-header"><h5>Zygimantas Domarkas</h5>S1718169</div>
					<div class="card-body">
						<h5 class="card-title">Front End Focused Developer</h5>
						<p class="card-text">Develop and design the frontend using responsive framework, whilst aiding with the development of the backend.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
					<div class="card-header"><h5>Samuel Brown</h5>S1713974</div>
					<div class="card-body">
						<h5 class="card-title">Back End Focused Developer</h5>
						<p class="card-text">To design the backend and collaborate with front end dev to produce a stable and useful backend.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
					<div class="card-header"><h5>Maxim Dascalasu</h5>S1715038</div>
					<div class="card-body">
						<h5 class="card-title">Back End Focused Developer</h5>
						<p class="card-text">To design the backend and collaborate with front end dev to produce a stable and useful backend.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top:70px;">
			<div class="col-lg-4 col-xs-12">
				<div class="card bg-light mb-3 mx-auto align-self-center" style="max-width: 18rem;">
					<div class="card-header"><h5>Conor McGowan</h5>S1709217</div>
					<div class="card-body">
						<h5 class="card-title">Systems Analyst</h5>
						<p class="card-text">To design and aid in the implementation of the overall system. Produce and deliver writeups and diagrams and justify organisational choices.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="card bg-light mb-3 mx-auto" style="max-width: 18rem;">
					<div class="card-header"><h5>Mubasher Moughal</h5>S1707083</div>
					<div class="card-body">
						<h5 class="card-title">Business Analyst</h5>
						<p class="card-text">To design a case for the business aspect of the project, perform competitor analysis and justify the rationale for the project, suggest business ideas.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>