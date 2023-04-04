<?php
date_default_timezone_set('Asia/Jakarta');
$pass = md5("bolehya");

$tgl = date('Y-m-d H:i:s');
$tgluniq = strtotime($tgl);

echo $tgl . "<br>" . $tgluniq;
echo "<br>";
//Generate a random string.
$token = openssl_random_pseudo_bytes(16);

//Convert the binary data into hexadecimal representation.
$token = bin2hex($token);

//Print it out for example purposes.
echo $token . $tgluniq;
$final = $token . $tgluniq;

$hitung = strlen($final);
echo "<br>";

echo $hitung;
