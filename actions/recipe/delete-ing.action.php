<?php
include_once "../../inc/db/connection.php";
$id = __escape($_GET["id"]);
$sql = "delete from ingredients where id = $id";
__execute($sql);
echo "DONE";