<?php 

include "../includes/db_connection.php";

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $un = $_POST["un"];
    $pw = $_POST["password"];

    $hashed_pw = password_hash($pw, PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO users (user_username, user_password, user_firstname, user_lastname, user_email) VALUES(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $un, $hashed_pw, $fname, $lname, $email);
        $stmt->execute();
        header("Location: ../webpages/login.php");

    } catch (Exception $e) {
        $msg = $e->getMessage();
        if (str_contains($msg, "Duplicate entry")) {
            echo "<script>alert('Email address is already used!'); location.href = '../webpages/register.php'</script>";

        }
    }
}

if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
    header("Location: ../webpages/login.php");
    exit();
} 
