<html>
<body>

<?php
    // Start a new session
    session_start();

    // Retrieve username and password submitted by user
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Establishing connection to the database
    $conn = mysqli_connect("localhost", "root", "", "pharmacydb");
    mysqli_select_db($conn, "pharmacydb");

    // Protection against malicious SQL injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // SQL Query to compare submitted data to the database
    $result = mysqli_query($conn,"select * from staff where username = '$username' and password= '$password'") or die("Database query failed".mysqli_error());
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["logged_in"] = 1;
        header("Location: /pharmacy/home.php");
    } else {
        header("Location: /pharmacy/login.php");
    }

    mysqli_close($conn);

    ?>
</body>
</html>