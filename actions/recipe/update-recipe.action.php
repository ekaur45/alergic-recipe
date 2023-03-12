<?php
include_once "../../inc/db/connection.php";
$id = __escape($_POST["id"]);
$name = __escape($_POST["recipe-name"]);
$description = __escape($_POST["recipe-description"]);
$target_file = "";
if($_FILES['theFile']['name'] != "") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["theFile"]["name"]);
    move_uploaded_file($_FILES["theFile"]["tmp_name"], "../../" . $target_file);
}
$sql = "UPDATE recipe SET `name` = '$name',`description` = '$description'".(!empty($target_file)?",`file`='$target_file' ":"")." where id=$id";
echo $sql;
__execute($sql);


$ids = explode(",",$_POST["ids"]);
$arr = array();
for ($i=0; $i <sizeof($ids) ; $i++) { 
    array_push($arr,"$id,".$ids[$i]);;
}
$DELETE_SQL = "DELETE FROM recipe_ingredients WHERE recipe_id = $id";
__execute($DELETE_SQL);
$SQL = "INSERT INTO recipe_ingredients(recipe_id,ingredient_id) values (".join("),(",$arr).")";
echo $SQL;
__execute($SQL);
$_SESSION["ERROR"] = __createNotification("Recipe updated successfuly.","Success");
echo "DONE";
//var_dump($_POST);
//var_dump($_FILES);