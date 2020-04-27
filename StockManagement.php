<!DOCTYPE html>
<html lang="en" xmlns:style="http://www.w3.org/1999/xhtml">
<head>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js.js"></script>
        <script type="text/javascript">
            function order(){
                $.ajax({
                    url:"order.php",
                    type: "POST",
                    success:function(result){
                        alert(result);
                    }
                });
            }
        </script>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
              crossorigin="anonymous">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Pharmacy | Order Supplies</title>
</head>
<body>

    <?php
    session_start();
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
    <form method="post" action="order.php" id="form1">
        <div class="container vertical-center d-flex justify-content-center" id="stock-box">
            <ul class="list-group white-list">
                <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                    <b class="b-margin-10">Order:</b>
                    <div class="btn-group">
                        <select name="drug1" class="custom-select" id="drug1" form="form1">
                            <option selected>Choose Prescription</option>
                            <option value="Amoxicillin">Amoxicillin</option>
                            <option value="Cetirizine">Cetirizine</option>
                            <option value="Clindamycin">Clindamycin</option>
                            <option value="Clopidogrel">Clopidogrel</option>
                            <option value="Diclofenac">Diclofenac</option>
                            <option value="Domperidone">Domperidone</option>
                            <option value="Dulcolax">Dulcolax</option>
                            <option value="Fluoxetine">Fluoxetine</option>
                            <option value="Gabapentin">Gabapentin</option>
                            <option value="Lisinopril">Lisinopril</option>
                        </select>
                        <select class="custom-select" name="stock-box-margin40" id="value1" form="form1">
                            <option selected value="0">Choose Quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </li>

                <ul class="list-group" id="list-group-mtop">
                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                        <b class="b-margin-10">Order:</b>
                        <div class="btn-group">
                            <select name="drug2" class="custom-select" id="drug2" form="form1">
                                <option selected disabled>Choose Prescription</option>
                                <option value="Amoxicillin">Amoxicillin</option>
                                <option value="Cetirizine">Cetirizine</option>
                                <option value="Clindamycin">Clindamycin</option>
                                <option value="Clopidogrel">Clopidogrel</option>
                                <option value="Diclofenac">Diclofenac</option>
                                <option value="Domperidone">Domperidone</option>
                                <option value="Dulcolax">Dulcolax</option>
                                <option value="Fluoxetine">Fluoxetine</option>
                                <option value="Gabapentin">Gabapentin</option>
                                <option value="Lisinopril">Lisinopril</option>
                            </select>
                            <select class="custom-select" name="stock-box-margin40-3" id="value2" form="form1">
                                <option selected value="0">Choose Quantity</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                        </div>
                    </li>
                </ul>
                <button type="button" onclick="GetSelectedValue1()" class="btn btn-primary mx-auto" style="width: 200px;" id="stock-box-margin40-4" data-toggle="modal" data-target="#exampleModal">
                    Proceed to Checkout
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Place the Order</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center result-padding-top" id="result3"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" onclick="order()" class="btn btn-primary" data-dismiss="modal" form="form1">Order</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </form>
</body>
</html>
