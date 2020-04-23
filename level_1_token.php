<?php
session_start();
if (isset($_SESSION['User'])){
    if ((time()-$_SESSION['start'])>600){
        session_destroy();
        header("location:dedboard/Welcome/login_duplicate.php");
    }
}else{
    header("location:dedboard/Welcome/login_duplicate.php");
}
include 'db.php';
$database=new db();
?>
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<html>
<head>
    <?php
    $user=$_SESSION['User'];
    $result=$database->Search("select MAX(token) AS maximum from user_has_token where user='$user'");
    if ($row=$result->fetch(PDO::FETCH_ASSOC)){
        $token=$row['maximum']+1;
    }
    ?>
    <title>Welcome to the level</title>
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="css1/style.css">
<body>
<div>
    <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left p-5">
            <?php
                $user=$_SESSION['User'];
                $result=$database->Search("select MAX(token) AS maximum from user_has_token where user='$user'");
                if ($row=$result->fetch(PDO::FETCH_ASSOC)){
                    $token=$row['maximum']+1;
                    echo "<input type='text' id='token_id' value=$token hidden>";
                    echo "<label class='form-control form-control-lg'>Please submit level ".$token." flag :</label>";
                }
            ?>
<!--            <label class='form-control form-control-lg'>Please submit the flag :</label>-->
    <div class="pt-3">
        <div class="form-group">
            <input class="form-control form-control-lg" type="text" name="token" id="token">
        </div>
        <div class="mt-3">
            <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="level_1" id="level_1" value="Submit">
        </div>
        <span id="result" style="color: red;font-size: 20px;"></span>
    </div>
        </div>
    </div>
</div>
<script>
    $(document).bind("contextmenu",function (e) {
        e.preventDefault();
    });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="myscript.js" type="text/javascript"></script>
</body>
</head>
</html>