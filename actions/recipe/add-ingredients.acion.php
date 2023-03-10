<?php
include_once "../../inc/db/connection.php";
var_dump($_POST);
$_recipe = __escape($_POST["recipe_id"]);
$query = "INSERT  INTO ingredients(ingredient,recipeid, `type`) values ";
foreach($_POST["normal"] as $data){
    $query.="('$data','$_recipe','normal'),";
}
foreach($_POST["clean"] as $data){
    $query.="('$data','$_recipe','clean'),";
}
// echo "<br/>";
// echo $query;
// echo "<br/>";
// echo substr($query, 0, -1);

$conn -> query(substr($query, 0, -1));
echo substr($query, 0, -1);
header("Location: ../../");