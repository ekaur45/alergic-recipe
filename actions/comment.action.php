<?php
session_start();
include_once "../inc/db/connection.php";
$_comment = __escape($_POST["comment"]);
$_id = __escape($_POST["id"]);
$_uid = __escape($_SESSION["LOGGED_IN"]);
$sql = "INSERT INTO `comments` (`rid`,`uid`,`comment`) VALUES ('$_id','$_uid','$_comment');";
$result = $conn->query($sql);
header("Location: ../../thank-you.php");