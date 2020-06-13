<?php
session_start();
if (isset($_SESSION['User'])){
    if ((time()-$_SESSION['start'])>600){
        session_destroy();
        header("location:dedboard/Welcome/login.html");
    }
}else{
    header("location:dedboard/Welcome/login.html");
}
?>
<link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
<link rel="shortcut icon" type="image/x-icon" href="dedboard/images/x.gif">
<link rel="stylesheet" href="css1/style.css">
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<html>
<head>
    <script>
        document.onkeydown = function(e) {
            if(event.keyCode == 123) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
    <title>Welcome to the 5th level</title>

<body style="background-color: black; background-image: url(https://giffiles.alphacoders.com/209/209037.gif)">
<div>

    <script>
        swal("Welcome !", "This is Level 5 When you take a selfi, that photo contains your details !) ", "info");
    </script>
    <img src="images/submit.jpg" style="background-repeat: no-repeat; background-size: 1024px " hidden>




</div>
<script>
    $(document).bind("contextmenu",function (e) {
        e.preventDefault();
    });
</script>
</body>
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</html>
