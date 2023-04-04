<?php
if ($_GET['page'] == 'auth') {
    include "login.php";
} elseif ($_GET['page'] == 'register') {
    include "register.php";
} else {
    include "login.php";
}
