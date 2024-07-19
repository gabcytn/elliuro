<?php 

session_start();
include "../includes/db_connection.php";
if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
    header("Location: ../webpages/login.php");
} 
$iid = $_GET["iid"];

$stmt = $conn->prepare("DELETE FROM cart_items WHERE cart_item_id = ?");
$stmt->bind_param("s", $iid);
$stmt->execute();

header("Location: ../webpages/cart.php");
exit();