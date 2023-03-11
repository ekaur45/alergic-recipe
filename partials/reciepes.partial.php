<?php 
include_once "../inc/db/connection.php";
$ids = $_GET["ids"];
$sql = "";
if($ids){

    $sql = "select * from recipe c1 where not exists (
        select 1 from recipe_ingredients WHERE ingredient_id IN ($ids) and recipe_id = c1.id
        )
        ";
}else{
    $sql = "select * from recipe";
}

$result = __select($sql);

var_dump($result);