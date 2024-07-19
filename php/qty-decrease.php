<?php 

session_start();
include "../includes/db_connection.php";
if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
    header("Location: ../webpages/login.php");
} 
$iid = $_GET["iid"];
$qty = $_GET["qty"];

if ($qty == 1) {
    header("Location: ../webpages/cart.php");
    exit();
}

$qty -= 1;

$stmt = $conn->prepare("UPDATE cart_items SET cart_item_qty = ? WHERE cart_item_id = ?");
$stmt->bind_param("ss", $qty, $iid);
$stmt->execute();

header("Location: ../webpages/cart.php");
exit();