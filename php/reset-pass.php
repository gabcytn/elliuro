<?php

include "../includes/db_connection.php";


$email = $_POST["email"];
$newPW = $_POST["new-pw"];
$newCPW = $_POST["new-cpw"];

$isEmailValid = $conn->query("SELECT * FROM users WHERE user_email = '$email'");

if ($isEmailValid->fetch_assoc()) {
    $stmt = $conn->prepare("UPDATE users SET user_password = ? WHERE user_email = '$email'");
    $pw = password_hash($newPW, PASSWORD_DEFAULT);

    $stmt->bind_param("s", $pw);
    $stmt->execute();

    header("Location: ../webpages/login.php");
    exit();
} else {
    echo 
    "
        <script>
            location.href = '../webpages/login.php';
            alert('No email found!');
        </script>
    ";
}