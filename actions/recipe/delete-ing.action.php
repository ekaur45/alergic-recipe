<?php
include_once "../../inc/db/connection.php";
include_once "../clear-alert.action.php";
$id = __escape($_GET["id"]);
$sql = "delete from ingredients where id = $id";
__execute($sql);
$_SESSION["ERROR"] = __createNotification("Ingredient deleted successfuly.","Success");
echo "DONE";