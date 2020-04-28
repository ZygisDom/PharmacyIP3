<?php
// Start a new session
session_start();

// Establishing connection to the database
$conn = mysqli_connect("localhost", "root", "", "pharmacydb");
mysqli_select_db($conn, "pharmacydb");

$patientID = $_POST['patientID'];
$patientID = stripcslashes($patientID);
$patientID = mysqli_real_escape_string($conn, $patientID);

$sql = mysqli_query($conn,"SELECT * FROM `patients` WHERE `ID_Patient` = '$patientID'");
$row = mysqli_fetch_array($sql);
if ($row['Status'] == "Prescription ready"){
    $newStatus1 = "Prescription in progress";
    $sql = mysqli_query($conn, "UPDATE `patients` SET `Status` = '$newStatus1' WHERE ID_Patient = '$patientID'");

} else if ($row['Status'] == "Prescription in progress"){
    $newStatus2 = "Prescription ready";
    $sql = mysqli_query($conn, "UPDATE `patients` SET `Status` = '$newStatus2' WHERE ID_Patient = '$patientID'");
}

echo "<script type='text/javascript'>";
echo "window.location = 'home.php';";
echo "</script>";
?>