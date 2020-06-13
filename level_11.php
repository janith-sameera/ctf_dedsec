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
    <title>Welcome to the 11th level</title>

<body style="background-color: black; background-image: url(https://img.thedailybeast.com/image/upload/c_crop,d_placeholder_euli9k,h_202,w_360,x_0,y_0/dpr_2.0/c_limit,w_740/fl_lossy,q_auto/v1505835594/170918-cox-the-hackers-hitting-back-at-cybercriminals-hero_360_xxxtcg)">
<div>
    <script>
        swal("Welcome !", "This is Level 11 ! Do you remember that past ? We are the key !!", "info");
        // dMENNVKTZOeNGp6I4Y1zY1jv6VG1t6XXouBCfkw/9v6y2hLxS7/fs9Dx+b857b55Nmr2vhrRN93vLOHZnK4f+52usBtQk8XBeD9XyFKhLqfh7DGEnp6G3w+f8knpNw6BQjZ68mpZgCn9PsHLOZRCygrizJ1QF1ogpgB8KFa0/m2CU0uY35Mot6cuYFlMhVVTCjglkZPZPUQ7Nf6Fy+aUXg==
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
<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="myscript.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</html>
