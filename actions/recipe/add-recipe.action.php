<?php
include_once "../../inc/db/connection.php";
$name = __escape($_POST["recipe-name"]);
$description = __escape($_POST["recipe-description"]);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["theFile"]["name"]);
move_uploaded_file($_FILES["theFile"]["tmp_name"], "../../" . $target_file);
$sql = "insert into recipe(`name`,`description`,`file`)values('$name','$description','$target_file');";
__execute($sql);
$result = __select("select last_insert_id() as id;");
$id = $result[0]["id"];
$ids = explode(",",$_POST["ids"]);
$arr = array();
for ($i=0; $i <sizeof($ids) ; $i++) { 
    array_push($arr,"$id,".$ids[$i]);;
}

$SQL = "INSERT INTO recipe_ingredients(recipe_id,ingredient_id) values (".join("),(",$arr).")";
//echo $SQL;
__execute($SQL);
echo "DONE";
//var_dump($_POST);
//var_dump($_FILES);