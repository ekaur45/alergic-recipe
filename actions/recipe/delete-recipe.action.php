<?php
include_once "../../inc/db/connection.php";
include_once "../clear-alert.action.php";
$id = __escape($_GET["id"]);
$sql = "delete from recipe where id = $id";
echo $sql;
__execute($sql);
$_SESSION["ERROR"] = __createNotification("Recipe deleted successfuly.","Success");
echo "DONE";