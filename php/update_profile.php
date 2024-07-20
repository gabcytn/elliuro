<?php

session_start();
if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
    header("Location: ../webpages/login.php");
    exit();
} 
include "../includes/db_connection.php";

$uid = $_SESSION["user_id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $un = $_POST["un"];
    $bio = $_POST["bio"];
    $email = $_POST["email"];

    $tempLoc = $_FILES["profile_pic"]["tmp_name"];
    $dir = "../img/";
    $file_name = $_FILES["profile_pic"]["name"];

    if ($file_name == "") {
        $img_q = $conn->query("SELECT user_img FROM users WHERE user_id = '$uid'");
        $r = $img_q->fetch_assoc();

        $file_name = $r["user_img"];
    } 

    $final_loc = $dir . $file_name;
    move_uploaded_file($tempLoc, $final_loc);

    $stmt = $conn->prepare("UPDATE users SET user_username = ?, user_firstname = ?, user_lastname = ?, user_email = ?, user_bio = ?, user_img = ? WHERE user_id = '$uid'");
    $stmt->bind_param("ssssss", $un, $fname, $lname, $email, $bio, $final_loc);

    $stmt->execute();
    $conn->close();

    header("Location: ../webpages/profile.php");
    
}
