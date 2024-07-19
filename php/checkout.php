<?php 

session_start();
include "../includes/db_connection.php";

if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
    header("Location: ../webpages/login.php");
    exit();
} 


$uid = $_SESSION["user_id"];

$stmt = $conn->query("SELECT cart_item_id, cart_item_buyerID FROM cart_items WHERE cart_item_buyerID = '$uid'");


while ($row = $stmt->fetch_assoc()) {
    $id = $row["cart_item_id"];
    $buyer = $row["cart_item_buyerID"];
    $stmt2 = $conn->query("INSERT INTO history (history_item_id, history_item_buyerID) VALUES ('$id', '$buyer')");
}
$stmt3 = $conn->query("DELETE FROM cart_items WHERE cart_item_buyerID = '$uid'");

header("Location: ../webpages/cart.php");