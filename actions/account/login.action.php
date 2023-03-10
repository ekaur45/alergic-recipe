<?php
include_once "../../inc/db/connection.php";
include_once "../clear-alert.action.php";
$_username = __escape($_POST["username"]);
$_password = __escape($_POST["password"]);
$_password = md5($_password);
$sql = "SELECT * FROM `accounts` WHERE username = '$_username'";
$result = $conn->query($sql);
if($result->num_rows>0){
    $_user = $result->fetch_assoc();
    if($_user["password"] == $_password){
        $_SESSION["LOGGED_IN"] = $_user["id"];
        $_SESSION["ERROR"] = __createNotification("Login successful.","Success");
        header("Location: ../../");
        return;
    }
}
$_SESSION["ERROR"] = __createNotification("Username or password is not correct.");
header("Location: ../../login.php");

var_dump($_SESSION["ERROR"]);