<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$now = date('Y-m-d H:i:s');

$connect = new mysqli("localhost", "root", "", "silsilah");
// $connect = new mysqli("localhost", "kaad7559_fahmi", "rahmadiani", "kaad7559_financi");

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}
