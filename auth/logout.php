<?php
require_once '../config/connect.php';
// log
$c_name = $_SESSION['u_name'];
$c_action = 'succes logout';
$c_time = date('Y-m-d H:i:s');
$c_com_ip = $_SERVER['REMOTE_ADDR'];
$c_com_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$c_script_name = $_SERVER['SCRIPT_NAME'];
$log = mysqli_query($connect, "INSERT INTO log SET c_name = '$c_name', c_action = '$c_action', c_time = '$c_time', c_com_ip = '$c_com_ip', c_com_name = '$c_com_name', c_script_name = '$c_script_name'");

session_destroy();
echo "<script>window.location='" . base_url('auth') . "';</script>";
