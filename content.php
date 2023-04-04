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
} else {
    include "dashboard.php";
}
