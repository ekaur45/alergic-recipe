<?php
include_once "../../inc/db/connection.php";
$_firstName = __escape($_POST["firstname"]); 
$_lastName = __escape($_POST["lastname"]);
$_username = __escape($_POST["username"]);
$_password = __escape($_POST["password"]);
$_password = md5($_password);
$sql = "INSERT INTO `accounts`(`firstName`,`lastName`,`username`,`password`)
VALUES('$_firstName','$_lastName','$_username','$_password');";
$result = $conn->query($sql);

header("Location: ../../login.php");