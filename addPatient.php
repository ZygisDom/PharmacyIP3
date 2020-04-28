<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Pharmacy | Home</title>


</head>

<body>
<?php
// Start a new session
session_start();

if ($_SESSION['logged_in'] == 0) {
    header('Location: login.php');
}

// Establishing connection to the database
$conn = mysqli_connect("localhost", "root", "", "pharmacydb");
mysqli_select_db($conn, "pharmacydb");

$fullname = $_POST['inputPatient'];
$fullname = stripcslashes($fullname);
$fullname = mysqli_real_escape_string($conn, $fullname);

$fullnamesplit = explode(" ", $fullname);
$Name = $fullnamesplit[0];
$Surname = $fullnamesplit[1];
$rand = rand(20,100);
$sql = mysqli_query($conn,"INSERT INTO `patients` (`ID_Patient`, `Name`, `Middlename`, `Surname`, `Status`) VALUES ('$rand', '$Name', '', '$Surname', 'Prescription Ready')");

echo "<script type='text/javascript'>";
echo "window.location = 'home.php';";
echo "</script>";
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
<!-- patients -->
<div class="container padding40 paddinglr0">
    <div class="row personrow mx-auto">
        <div class="col align-self-center">
            <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
        </div>
        <div class="col align-self-center text-center">
            <span class="label-blue"> Patient </span> <br>
            <div class="person-name patientfsize"> <?php echo $_SESSION["patient0Name"].' '.$_SESSION["patient0Surname"]; ?> </div>
        </div>
        <div class="col align-self-center text-center">
            <div class="persid">
                <span class="label-blue"> Patient ID </span> <br>
                <span class="person-id patientfsize"> <?php echo $_SESSION["patient0ID"]; ?> </span>
            </div>
        </div>
        <div class="col align-self-center text-center">
            <div class="prescription-status justify-content-center">
                <span class="label-blue"> Status </span> <br>
                <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient0Status"]; ?> </span>
            </div>
        </div>
    </div>
</div>

<div class="row personrow mx-auto">
    <div class="col align-self-center">
        <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
    </div>
    <div class="col align-self-center text-center">
        <span class="label-blue"> Patient </span> <br>
        <div class="person-name patientfsize"> <?php echo $_SESSION["patient1Name"].' '.$_SESSION["patient1Surname"]; ?> </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="persid">
            <span class="label-blue"> Patient ID </span> <br>
            <span class="person-id patientfsize"> <?php echo $_SESSION["patient1ID"]; ?> </span>
        </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="prescription-status justify-content-center">
            <span class="label-blue"> Status </span> <br>
            <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient1Status"]; ?> </span>
        </div>
    </div>
</div>

<div class="row personrow mx-auto">
    <div class="col align-self-center">
        <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
    </div>
    <div class="col align-self-center text-center">
        <span class="label-blue"> Patient </span> <br>
        <div class="person-name patientfsize"> <?php echo $_SESSION["patient2Name"].' '.$_SESSION["patient2Surname"]; ?> </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="persid">
            <span class="label-blue"> Patient ID </span> <br>
            <span class="person-id patientfsize"> <?php echo $_SESSION["patient2ID"]; ?> </span>
        </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="prescription-status justify-content-center">
            <span class="label-blue"> Status </span> <br>
            <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient2Status"]; ?> </span>
        </div>
    </div>
</div>

<div class="row personrow mx-auto">
    <div class="col align-self-center">
        <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
    </div>
    <div class="col align-self-center text-center">
        <span class="label-blue"> Patient </span> <br>
        <div class="person-name patientfsize"> <?php echo $_SESSION["patient3Name"].' '.$_SESSION["patient3Surname"]; ?> </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="persid">
            <span class="label-blue"> Patient ID </span> <br>
            <span class="person-id patientfsize"> <?php echo $_SESSION["patient3ID"]; ?> </span>
        </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="prescription-status justify-content-center">
            <span class="label-blue"> Status </span> <br>
            <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient3Status"]; ?> </span>
        </div>
    </div>
</div>

<div class="row personrow mx-auto">
    <div class="col align-self-center">
        <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
    </div>
    <div class="col align-self-center text-center">
        <span class="label-blue"> Patient </span> <br>
        <div class="person-name patientfsize"> <?php echo $_SESSION["patient4Name"].' '.$_SESSION["patient4Surname"]; ?> </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="persid">
            <span class="label-blue"> Patient ID </span> <br>
            <span class="person-id patientfsize"> <?php echo $_SESSION["patient4ID"]; ?> </span>
        </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="prescription-status justify-content-center">
            <span class="label-blue"> Status </span> <br>
            <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient4Status"]; ?> </span>
        </div>
    </div>
</div>

<div class="row personrow mx-auto">
    <div class="col align-self-center">
        <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
    </div>
    <div class="col align-self-center text-center">
        <span class="label-blue"> Patient </span> <br>
        <div class="person-name patientfsize"> <?php echo $_SESSION["patient5Name"].' '.$_SESSION["patient5Surname"]; ?> </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="persid">
            <span class="label-blue"> Patient ID </span> <br>
            <span class="person-id patientfsize"> <?php echo $_SESSION["patient5ID"]; ?> </span>
        </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="prescription-status justify-content-center">
            <span class="label-blue"> Status </span> <br>
            <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient5Status"]; ?> </span>
        </div>
    </div>
</div>

<div class="row personrow mx-auto">
    <div class="col align-self-center">
        <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
    </div>
    <div class="col align-self-center text-center">
        <span class="label-blue"> Patient </span> <br>
        <div class="person-name patientfsize"> <?php echo $_SESSION["patient6Name"].' '.$_SESSION["patient6Surname"]; ?> </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="persid">
            <span class="label-blue"> Patient ID </span> <br>
            <span class="person-id patientfsize"> <?php echo $_SESSION["patient6ID"]; ?> </span>
        </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="prescription-status justify-content-center">
            <span class="label-blue"> Status </span> <br>
            <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient6Status"]; ?> </span>
        </div>
    </div>
</div>

<div class="row personrow mx-auto">
    <div class="col align-self-center">
        <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
    </div>
    <div class="col align-self-center text-center">
        <span class="label-blue"> Patient </span> <br>
        <div class="person-name patientfsize"> <?php echo $_SESSION["patient7Name"].' '.$_SESSION["patient7Surname"]; ?> </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="persid">
            <span class="label-blue"> Patient ID </span> <br>
            <span class="person-id patientfsize"> <?php echo $_SESSION["patient7ID"]; ?> </span>
        </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="prescription-status justify-content-center">
            <span class="label-blue"> Status </span> <br>
            <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient7Status"]; ?> </span>
        </div>
    </div>
</div>

<div class="row personrow mx-auto">
    <div class="col align-self-center">
        <img src="https://st3.depositphotos.com/13159112/17145/v/450/depositphotos_171453724-stock-illustration-default-avatar-profile-icon-grey.jpg">
    </div>
    <div class="col align-self-center text-center">
        <span class="label-blue"> Patient </span> <br>
        <div class="person-name patientfsize"> <?php echo $_SESSION["patient8Name"].' '.$_SESSION["patient8Surname"]; ?> </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="persid">
            <span class="label-blue"> Patient ID </span> <br>
            <span class="person-id patientfsize"> <?php echo $_SESSION["patient8ID"]; ?> </span>
        </div>
    </div>
    <div class="col align-self-center text-center">
        <div class="prescription-status justify-content-center">
            <span class="label-blue"> Status </span> <br>
            <span class="person-id percol patientfsize"> <?php echo $_SESSION["patient8Status"]; ?> </span>
        </div>
    </div>
</div>
<div class="btn-group dropup float-right position-sticky" id="add-new-patient">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Add New Patient
    </button>
    <div class="dropdown-menu">
        <form action="addPatient.php" method="post">
            <div class="form-group">
                <label for="inputPatient" class="mx-auto d-flex justify-content-center">Patient's Full Name</label>
                <input type="name" class="form-control mx-auto d-flex justify-content-center" name="inputPatient" id="inputPatient" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary mx-auto d-flex justify-content-center" style="width: 100px;">Submit</button>
        </form>
    </div>
</div>
<!-- patients end -->
</body>
</html>
