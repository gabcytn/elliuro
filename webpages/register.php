<?php
    session_start();
    if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true) {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="preload" href="../fonts/SeasonRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/GeraldineDEMOVer.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/TroyeFree-Sans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../img/logo_elliuro.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bc1035a4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles/register.css">
    <script defer src="../js/register.js"></script>
</head>
<body>
    <header>
        <nav class="container">
            <div class="nav-main">
                <a href="" class="nav-brand">ELLIURO</a>
                <ul class="nav-list">
                    <li class="nav-item"><a href="#" class="nav-link">Men</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Women</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Kids</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <a href="#"><span class="material-symbols-outlined">search</span></a>
                <a href="#"><span class="material-symbols-outlined">person</span></a>
                <a href="#"><span class="material-symbols-outlined">local_mall</span></a>
            </div>
        </nav>
    </header>
    <main>
        <form action="../php/register_submit.php" method="post" autocomplete="off" class="form-container">
            <h1>Sign up</h1>
            <input type="email" name="email" id="email" placeholder="EMAIL ADDRESS" required>
            <input type="text" name="lname" id="lname" placeholder="LAST NAME" required>
            <input type="text" name="fname" id="fname" placeholder="FIRST NAME" required>
            <input type="text" name="un" id="un" placeholder="USERNAME" required>
            <input type="password" name="password" id="password" placeholder="PASSWORD" required>
            <input type="password" name="cpassword" id="cpassword" placeholder="CONFIRM PASSWORD" required>
            <p id="password-reminder">Password must be atleast 8 characters</p>
            <button type="submit" id="login-btn">REGISTER</button>

            <a href="login.php">Already have an account?</a>
        </form>
    </main>

    <?php
        include "../includes/footer.php";
    ?>
</body>
</html>