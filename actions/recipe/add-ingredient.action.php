<?php
include_once "../../inc/db/connection.php";
$name =__escape($_POST["name"]);
$energy =__escape($_POST["energy"]);
$fat =__escape($_POST["fat"]);
$unSaturatedFat =__escape($_POST["unSaturatedFat"]);
$carbohydrates =__escape($_POST["carbohydrates"]);
$sugar =__escape($_POST["sugar"]);
$protein =__escape($_POST["protein"]);
$salt =__escape($_POST["salt"]);
$type =__escape($_POST["type"]);

$sql = "INSERT INTO `ingredients`
(`name`,`energy`,`fat`,`unSaturatedFat`,`carbohydrates`,`sugar`,`protein`,`salt`,`type`)
VALUES
('$name','$energy','$fat','$unSaturatedFat','$carbohydrates','$sugar','$protein','$salt','$type');";

__execute($sql);

echo "DONE";