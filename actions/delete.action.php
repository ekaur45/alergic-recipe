<?php
include_once "../inc/db/connection.php";
$_firstName = __escape($_GET["id"]); 
$sql = "DELETE from `grocerylist` where id = $_firstName";
$result = $conn->query($sql);

header("Location: ../../grocery-list.php");