<?php
    $username=$_GET['email'];
    $password=$_GET['password'];

    include_once '../../db.php';
    $databse = new db();
    $con = $databse->getConnection();

    $connection = $con;
    if($con){
        $rs=$databse->Search("SELECT * from login where username='$username' and password='$password'");
        if ($row=$rs->fetch(PDO::FETCH_ASSOC)){
            session_start();
            $_SESSION['User']=$username;
            $_SESSION['start']=time();
            echo "true";
        }else{
            echo "false";
        }
    }else{
        echo "false";
    }
?>
