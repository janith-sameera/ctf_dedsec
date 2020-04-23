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
include "check.php";
?>
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
    <title>Welcome to the 2st level</title>

<body style="background-color: black">
<div>
    <script>
        swal("Welcome !", "This is Level 3 :) ", "info");
    </script>
    <form>
        <h2 style="text-align: center;color: red">Welcome This is Level 3</h2>
        <li class="folders">
            <a href="level_3.txt" target="_blank" title="files/Archives" class="folders" >
                <span class="icon folder full"></span>
                <span class="name" hidden>Click me</span>
            </a>
        </li>
    </form>
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