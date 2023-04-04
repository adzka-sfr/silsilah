<?php require_once '../config/connect.php';
if (!empty($_SESSION['uid'])) {
    echo "<script>window.location='" . base_url() . "';</script>";
}

include '../header.php';
?>

<!-- Content -->

<?php
if (empty($_GET['page'])) {
    $_GET['page'] = "auth";
} else {
    include "content.php";
}
?>

<!-- / Content -->

<?php
include '../footer.php';
?>