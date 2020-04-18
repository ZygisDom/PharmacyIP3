<?php

session_start();

//$drug1 = $_POST['drug1'];
//$drug1value = $_POST['value1'];
//$drug2 = $_POST['drug2'];
//$drug2value = $_POST['value2'];

$conn = mysqli_connect("localhost", "root", "", "pharmacydb");
mysqli_select_db($conn, "pharmacydb");

$sql = mysqli_query($conn, "UPDATE `medicine` SET `Qty`= Qty + 3 WHERE ID_Medicine = 1") or die("Database query failed".mysqli_error());
	//UPDATE medicine SET Qty=Qty + $drug1value WHERE Name = $drug1
echo "Order has been confirmed. Stock will now be updated.";
?>