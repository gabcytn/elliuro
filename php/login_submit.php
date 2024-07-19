<?php 

session_start();
include "../includes/db_connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pw = $_POST["password"];
    // $hashed = password_hash($pw, PASSWORD_DEFAULT);
    echo $email;

    $stmt = $conn->prepare("SELECT user_password FROM users WHERE user_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $retrieved_pass = $stmt->get_result();
    $result = $retrieved_pass->fetch_assoc();
    

    if (password_verify($pw, $result["user_password"])) {
        $stmt = $conn->prepare("SELECT user_id FROM users WHERE user_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $retrieved_id = $stmt->get_result();
        $id = $retrieved_id->fetch_assoc();

        $id = $id["user_id"];

        $_SESSION["user_id"] = $id;
        $_SESSION["isLoggedIn"] = true;
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Incorrect credentials!'); location.href = '../webpages/login.php'</script>";

    }
}