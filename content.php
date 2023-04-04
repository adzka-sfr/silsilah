<?php
if ($_GET['page'] == 'dashboard') {
    include "dashboard.php";
} elseif ($_GET['page'] == 'putra') {
    include "putra.php";
} elseif ($_GET['page'] == 'putu') {
    include "putu.php";
} elseif ($_GET['page'] == 'buyut') {
    include "buyut.php";
} elseif ($_GET['page'] == 'canggah') {
    include "canggah.php";
} elseif ($_GET['page'] == 'eputrattl') {
    include "eputrattl.php";
} elseif ($_GET['page'] == 'epututtl') {
    include "epututtl.php";
} elseif ($_GET['page'] == 'ebuyutttl') {
    include "ebuyutttl.php";
} elseif ($_GET['page'] == 'ecanggahttl') {
    include "ecanggahttl.php";
} else {
    include "dashboard.php";
}
