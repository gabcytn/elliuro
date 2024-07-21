<?php 

include "../includes/db_connection.php";



if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pw = $_POST["password"];
    $remember = isset($_POST["remember-me"]);

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

        if ($remember) {
            setcookie("email", $email, time() + (86400 * 30), "/");
            setcookie("password", $pw, time() + (86400 * 30), "/");
        } else {
            setcookie("email", "", time() - 3600, "/");
            setcookie("password", "", time() - 3600, "/");
        }

        session_start();
        $_SESSION["user_id"] = $id;
        $_SESSION["isLoggedIn"] = true;
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Incorrect credentials!'); location.href = '../webpages/login.php'</script>";

    }
}

// if (!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] != true) {
//     header("Location: ../webpages/login.php");
//     exit();
// } 