<?php
include_once "../../inc/db/connection.php";
$id =__escape($_POST["id"]);
$name =__escape($_POST["name"]);
$energy =__escape($_POST["energy"]);
$fat =__escape($_POST["fat"]);
$unSaturatedFat =__escape($_POST["unSaturatedFat"]);
$carbohydrates =__escape($_POST["carbohydrates"]);
$sugar =__escape($_POST["sugar"]);
$protein =__escape($_POST["protein"]);
$salt =__escape($_POST["salt"]);
$type =__escape($_POST["type"]);

$sql = "UPDATE `ingredients` SET
`name` = '$name',`energy` = '$energy',`fat` = '$fat',`unSaturatedFat` = '$unSaturatedFat',`carbohydrates` = '$carbohydrates',
`sugar` = '$sugar',`protein` = '$protein',`salt` = '$salt',`type` = '$type'
WHERE id = $id";
echo $sql;
__execute($sql);

echo "DONE";
header("Location: ../../add.recipe.php");