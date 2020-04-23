<?php
include_once 'db.php';
$databse = new db();
$con = $databse->getConnection();

if ($_GET['id']=="contact"){
    $username=$_GET['email'];
    $password=$_GET['password'];

    $connection = $con;

    if($con){
        $rs=$databse->Search("SELECT * from duplicate_login where username='$username' and password='$password'");
        if ($row=$rs->fetch(PDO::FETCH_ASSOC)){
            echo "true";
        }else{
            echo "false";
        }
    }else{
        echo "false";
    }
}