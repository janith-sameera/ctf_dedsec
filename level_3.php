<?php
session_start();
if (isset($_SESSION['User'])) {
    if ((time() - $_SESSION['start']) > 600) {
        session_destroy();
        header("location:dedboard/Welcome/login.html");
    }
} else {
    header("location:dedboard/Welcome/login.html");
}
?>
<link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
<link rel="shortcut icon" type="image/x-icon" href="dedboard/images/x.gif">
<link rel="stylesheet" href="css1/style.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<html>
<head>
    <script>
        document.onkeydown = function (e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
    <title>Welcome to the 3rd level</title>

<body style="background-color: white;">
<div>
    <script>
        swal("Welcome !", "This is Level 3 ! ", "info");
    </script>
    <center>
        <br><br>
        <h1 style="color: red">Please Guess The Password</h1><br>
        <div style="background-color: black; color: white; width: 20%; height: 28%;"><br>
            <h1>First name : Donald</h1><br>
            <h1>Last name  : Trump</h1><br>
            <h1>Birthday   : 05/14/1956</h1><br>
            <h1>Nic	   : 562330568v</h1><br>
            <h1>Favourite Actor : Shah Rukh Khan</h1><br>
            <h1>Hobby	   : Watching movies</h1><br>
        </div>
    </center>

    <div class="col-lg-6 mx-auto">
        <div class="auth-form-light text-left p-5">
            <div class="pt-3">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="pass" id="pass"
                           placeholder="Enter Password" style="border-style: dot-dot-dash">
                </div>
                <div class="mt-3">
                    <input class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" type="submit"
                           name="level_3_submit" id="level_3_submit" value="Login">
                </div>
                <br>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).bind("contextmenu", function (e) {
        e.preventDefault();
    });
</script>

</body>
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="myscript.js" type="text/javascript"></script>
</html>
