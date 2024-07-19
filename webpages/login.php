<?php
    session_start();
    if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true) {
        $id = $_SESSION["user_id"];
        header("Location: ../index.php?$id");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preload" href="../fonts/SeasonRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/GeraldineDEMOVer.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/TroyeFree-Sans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../img/logo_elliuro.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bc1035a4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="nav-main">
                <h1 class="nav-brand">ELLIURO</h1>
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
        <form action="../php/login_submit.php" method="post" autocomplete="off" class="form-container">
            <h1>Login</h1>
            <input type="text" name="email" id="email" placeholder="EMAIL ADDRESS" required>
            <input type="password" name="password" id="password" placeholder="PASSWORD" required>
            <p id="password-reminder">Password must be atleast 8 characters</p>
            <button type="submit" id="login-btn">Login</button>
            <div class="login-help">
                <div class="login-help__remember">
                    <input type="checkbox" name="remember-me" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <a href="#" id="forgot-pass">Forgot password?</a>
            </div>

            <div class="login-register">
                <p>New to the elliuro community?</p>
                <a href="register.php">Create an account</a>
            </div>
        </form>

    </main>

    <?php
        include "../includes/footer.php";
    ?>
</body>
</html>