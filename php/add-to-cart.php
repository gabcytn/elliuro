<?php 

include "../includes/db_connection.php";

session_start();
if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
    header("Location: ../webpages/login.php");
}  
$uid = $_SESSION["user_id"];
$iid = $_GET["iid"];
$s = $_GET["s"];

$res = $conn->query("SELECT * FROM cart_items WHERE cart_item_buyerID = '$uid' AND cart_item_id = '$iid'");

if ($res->num_rows > 0) {
    header("Location: ../webpages/item.php?iid=".$iid."&s=".$s);
    exit();
}

$stmt = $conn->prepare("INSERT INTO cart_items (cart_item_id, cart_item_buyerID, cart_item_section)
                        VALUES (?, ?, ?)");

$stmt->bind_param("sss", $iid, $uid, $s);
$stmt->execute();

$conn->close();
header("Location: ../webpages/item.php?iid=".$iid."&s=".$s);