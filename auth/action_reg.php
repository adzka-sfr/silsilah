<?php
require '../config/connect.php';

$username = $_POST['username'];
$user_id = $_POST['userid'];
$password = $_POST['password'];

// cek duplikasi user id
$sql = mysqli_query($connect, "SELECT c_uid FROM auth WHERE c_uid = '$user_id'");
$result = mysqli_fetch_array($sql);

if (!empty($result)) {
    echo "uid already";
} else {
    // user id
    $c_uid = $user_id;

    // name
    $c_name = $username;

    // encript the password
    $c_password = md5($password);

    // create token using openssl, bin2hex, & string of time
    $token = openssl_random_pseudo_bytes(16);
    $token = bin2hex($token);
    $date = date('Y-m-d H:i:s');
    $getDate = strtotime($date);
    $c_token = $token . $getDate;

    // insert query
    $sql = mysqli_query($connect, "INSERT INTO auth SET c_uid = '$c_uid', c_name = '$c_name', c_password = '$c_password', c_token = '$c_token'");

    if ($sql) {
        $_SESSION['uid'] = $user_id;
        echo "success";
    } else {
        echo "error";
    }
}

# jika error harus mengembalikan nilai di bawah ini
# echo "error";
