<?php
require_once "../../inc/db/connection.php";
$_id = __escape($_GET["id"]);
$_sql = "SELECT * from ingredients where `type`='normal' and recipeid='$_id'";
$_result = $conn->query($_sql);
