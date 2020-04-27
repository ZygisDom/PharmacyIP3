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
    <title>Pharmacy | Log In</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["username"] = "";
        $_SESSION["password"] = "";
    ?>
    <div class="modal-dialog text-center vertical-center">
        <div class="col-9 main-section">
            <div class="modal-content" id="loginbox">
                <div class="user-image">
                    <img src="images/face.png"/>
                </div>
                <div class="col-12 form-input">
                    <form action="processlogin.php" method="POST">
                        <div class="form-group" id="formmargin1">
                            <input type="text" name ="username" id="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group" id="formmargin2">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="submit-button">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
