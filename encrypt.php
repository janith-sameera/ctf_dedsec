<?php

$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '1234567891011121';
$encryption_key = "CTF_encrypt";
$encryption = openssl_encrypt("Dedsec are the best", $ciphering, $encryption_key, $options, $encryption_iv);

$decryption_iv = '1234567891011121';
$decryption_key = "CTF_encrypt";
$decryption=openssl_decrypt ("BGnwQw==", $ciphering, $decryption_key, $options, $decryption_iv);
echo $decryption;
