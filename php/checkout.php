<?php 

session_start();
include "../includes/db_connection.php";

if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
    header("Location: ../webpages/login.php");
    exit();
} 


$uid = $_SESSION["user_id"];

$stmt = $conn->query("SELECT cart_item_id, cart_item_buyerID, cart_item_qty FROM cart_items WHERE cart_item_buyerID = '$uid'");


while ($row = $stmt->fetch_assoc()) {
    $id = $row["cart_item_id"];
    $buyer = $row["cart_item_buyerID"];
    $qty = $row["cart_item_qty"];
    $stmt2 = $conn->query("INSERT INTO history (history_item_id, history_item_buyerID, history_qty) VALUES ('$id', '$buyer', '$qty')");
}
$stmt3 = $conn->query("DELETE FROM cart_items WHERE cart_item_buyerID = '$uid'");

header("Location: ../webpages/cart.php");