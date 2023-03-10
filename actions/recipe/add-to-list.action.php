<?php
include_once "../../inc/db/connection.php";
$_id = __escape($_GET["id"]);
session_start();
$_userid = $_SESSION["LOGGED_IN"];
$_sql = "REPLACE INTO `grocerylist` (`ingredientid`,`userid`)VALUES('$_id','$_userid');";
$conn->query($_sql);
header("Location: ../../index.php");