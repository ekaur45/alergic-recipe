<?php
session_start();
$_SESSION["ERROR"] = "";

function __createNotification($msg,$type="Error"){
    return array("type"=>$type,"msg"=>$msg);
}