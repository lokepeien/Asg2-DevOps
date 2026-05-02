<?php
require_once("config.php");

if(!$conn){
    die("Connection Fail");
}

$tea_id     = $_POST["item_id"];
$quantity   = $_POST["quantity"];
$ice_level  = $_POST["ice_level"];
$sugar_level = $_POST["sugar_level"];

$sql_insert_order = "insert into `order`(tea_id, quantity, ice_level, sugar_level)
                     values ($tea_id, $quantity, $ice_level, $sugar_level);";

if(!$conn->query($sql_insert_order)){
    die("Insert Fail");
}

$conn->close();

header("Location: receipt.php");
exit();
?>
