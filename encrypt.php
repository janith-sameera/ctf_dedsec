<?php

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '1234567891011121';
$encryption_key = "CTF_encrypt";
$encryption = openssl_encrypt("bGV2ZWxfMg==", $ciphering, $encryption_key, $options, $encryption_iv);
echo $encryption;
//$decryption_iv = '1234567891011121';
//$decryption_key = "CTF_encrypt";
//$decryption=openssl_decrypt ($encryption, $ciphering, $decryption_key, $options, $decryption_iv);