<?php
//session_start();
if (isset($_SESSION["LOGGED_IN"]) && !empty($_SESSION["LOGGED_IN"])) {
} else {
    session_destroy();
    header("Location: login.php");
}
