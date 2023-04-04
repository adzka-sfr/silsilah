<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$now = date('Y-m-d');

//$connect = new mysqli("localhost", "root", "", "silsilah");
$connect = new mysqli("localhost", "kaad7559_fahmi", "rahmadiani", "kaad7559_silsilah");

if (!$connect) {
    die("Connection failed" . mysqli_connect_error());
}
