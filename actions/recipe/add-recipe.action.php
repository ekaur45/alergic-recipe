<?php
include_once "../../inc/db/connection.php";
$_recipeName = __escape($_POST["recipe-name"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["theFile"]["name"]);
move_uploaded_file($_FILES["theFile"]["tmp_name"], "../../" . $target_file);
$sql = "INSERT INTO recipe(`name`,`file`) values('$_recipeName','$target_file');";
$result = $conn->query($sql);
header("Location: ../../add.recipe.php");