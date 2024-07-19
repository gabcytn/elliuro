<?php 

session_start();
if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
    header("Location: ../webpages/login.php");
} 
include "../includes/db_connection.php";
$iid = $_GET["iid"];
$qty = $_GET["qty"];

$qty += 1;

$stmt = $conn->prepare("UPDATE cart_items SET cart_item_qty = ? WHERE cart_item_id = ?");
$stmt->bind_param("ss", $qty, $iid);
$stmt->execute();

header("Location: ../webpages/cart.php");
exit();