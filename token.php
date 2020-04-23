<?php
session_start();
include_once 'db.php';
$databse = new db();

date_default_timezone_set("Asia/Colombo");
$date=date('h:i:s a',time());
$simple_string = $_GET['token'];
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '1234567891011121';
$encryption_key = "CTF_encrypt";
$encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);
$decryption_iv = '1234567891011121';
$decryption_key = "CTF_encrypt";
$decryption=openssl_decrypt ($encryption, $ciphering, $decryption_key, $options, $decryption_iv);
if ($_GET['id']=="token"){
        $token=$_GET['token'];
        $token_id=$_GET['token_id'];
        $en_token=$encryption;
        $user=$_SESSION['User'];
        $start_time=$_SESSION['start'];
        $encryption_start_time = openssl_encrypt($start_time, $ciphering, $encryption_key, $options, $encryption_iv);
        $end_time=$date;
        $encryption_end_time = openssl_encrypt($end_time, $ciphering, $encryption_key, $options, $encryption_iv);
        $rs=$databse->Search("SELECT * from token where token='$en_token' and level='$token_id' ");
        if ($row = $rs->fetch(PDO::FETCH_ASSOC)){
            $result=$databse->Search("SELECT * from user_has_token where user='$user' and token='$token_id' ");
            if ($row1 = $result->fetch(PDO::FETCH_ASSOC)){
            }else{
                $databse->IUD("INSERT INTO user_has_token (user, token,start_time,end_time) VALUES ('$user',".$row['idtoken'].",'$encryption_start_time','$encryption_end_time')");
                $databse->IUD("update duplicate_login set rating=rating+'15' where username='$user'");
            }
            echo $token_id;
        }else{
            echo "false";
        }
    }
?>
