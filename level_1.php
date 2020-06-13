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
<html>
<head>
    <title>Welcome to the 1st level</title>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="js/java_file.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="dedboard/images/x.gif">

</head>

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
<body oncontextmenu="return false;">
    <h1 style="color: white;text-align: center">Welcome to the Level 01</h1>
    <div>
        <img class="center" src="https://media.giphy.com/media/3oKIPlCroSFHV8uoko/giphy.gif">
    </div>

</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</html>
