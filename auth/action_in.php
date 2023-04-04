<?php
require '../config/connect.php';

$user_id = $_POST['userid'];
$password = $_POST['password'];

# preparation
$c_uid = $user_id;
$c_password = md5($password);

// cek user id
$sql = mysqli_query($connect, "SELECT c_uid FROM auth WHERE c_uid = '$c_uid'");
$result = mysqli_fetch_array($sql);

if (empty($result)) {
    // log
    $c_name = $c_uid;
    $c_action = 'Uid fail';
    $c_time = date('Y-m-d H:i:s');
    $c_com_ip = $_SERVER['REMOTE_ADDR'];
    $c_com_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $c_script_name = $_SERVER['SCRIPT_NAME'];
    $log = mysqli_query($connect, "INSERT INTO log SET c_name = '$c_name', c_action = '$c_action', c_time = '$c_time', c_com_ip = '$c_com_ip', c_com_name = '$c_com_name', c_script_name = '$c_script_name'");

    echo "uid fail";
} else {
    // cek password
    $sql = mysqli_query($connect, "SELECT c_uid FROM auth WHERE c_uid = '$c_uid' AND c_password = '$c_password'");
    $result = mysqli_fetch_array($sql);

    if (empty($result)) {
        // log
        $sql = mysqli_query($connect, "SELECT c_name FROM auth WHERE c_uid = '$c_uid'");
        $result = mysqli_fetch_array($sql);
        $c_name = $result['c_name'];
        $c_action = 'Password fail';
        $c_time = date('Y-m-d H:i:s');
        $c_com_ip = $_SERVER['REMOTE_ADDR'];
        $c_com_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $c_script_name = $_SERVER['SCRIPT_NAME'];
        $log = mysqli_query($connect, "INSERT INTO log SET c_name = '$c_name', c_action = '$c_action', c_time = '$c_time', c_com_ip = '$c_com_ip', c_com_name = '$c_com_name', c_script_name = '$c_script_name'");

        echo "pass fail";
    } else {
        $sql = mysqli_query($connect, "SELECT * FROM auth WHERE c_uid = '$c_uid' AND c_password = '$c_password'");
        $result = mysqli_fetch_array($sql);
        $_SESSION['uid'] = $result['c_uid'];
        $_SESSION['u_name'] = $result['c_name'];
        $_SESSION['u_token'] = $result['c_token'];

        // log
        $c_name = $_SESSION['u_name'];
        $c_action = 'succes login';
        $c_time = date('Y-m-d H:i:s');
        $c_com_ip = $_SERVER['REMOTE_ADDR'];
        $c_com_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $c_script_name = $_SERVER['SCRIPT_NAME'];
        $log = mysqli_query($connect, "INSERT INTO log SET c_name = '$c_name', c_action = '$c_action', c_time = '$c_time', c_com_ip = '$c_com_ip', c_com_name = '$c_com_name', c_script_name = '$c_script_name'");

        echo "success";
    }
}

# jika error harus mengembalikan nilai di bawah ini
# echo "error";
