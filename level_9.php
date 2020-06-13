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
    <title>Welcome to the 9th level</title>
    <body style="background-image: url(https://media3.giphy.com/media/6OrCT1jVbonHG/source.gif)">
<div>

    <script>
        swal({
            title: "Welcome to the 9th level",
            text: "Welcome",
            icon: "info",
            button: "Ready",
            dangerMode: true,
        })
            .then((willDelete) => {
                    swal("Lets do this marines !", "Deadsec team sends you a message by using a link.\n Let's find out what they have to say", "info");
            });
        document.write("<img src=\"images/level_9_link.jpg\" hidden>");
    </script>
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
