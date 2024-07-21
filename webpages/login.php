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
                    <li class="nav-item"><a href="mens.php" class="nav-link">Men</a></li>
                    <li class="nav-item"><a href="womens.php" class="nav-link">Women</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Kids</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <a href="#"><span class="material-symbols-outlined">search</span></a>
                <a href="profile.php"><span class="material-symbols-outlined">person</span></a>
                <a href="cart.php"><span class="material-symbols-outlined">local_mall</span></a>
            </div>
        </nav>
    </header>
    <main>
        <form action="../php/login_submit.php" method="post" autocomplete="off" class="form-container">
            <h1>Login</h1>
            <input type="text" name="email" id="email" placeholder="EMAIL ADDRESS" required value="<?php echo isset($_COOKIE["email"]) ? $_COOKIE["email"] : "" ?>">
            <input type="password" name="password" id="password" placeholder="PASSWORD" required value="<?php echo isset($_COOKIE["password"]) ? $_COOKIE["password"] : "" ?>">
            <p id="password-reminder">Password must be atleast 8 characters</p>
            <button type="submit" id="login-btn">Login</button>
            <div class="login-help">
                <div class="login-help__remember">
                    <input type="checkbox" name="remember-me" id="remember-me" <?php echo isset($_COOKIE["email"]) ? "checked" : "" ?>>
                    <label for="remember-me">Remember me</label>
                </div>
                <p id="forgot-pass">Forgot password?</p>
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

    <dialog id="reset-dialog">
        <form action="../php/reset-pass.php" id="reset-pass" method="post" autocomplete="off">
            <h2>Forgot password?</h2>
            <input type="email" name="email" id="email-reset" placeholder="EMAIL" required>
            <input type="password" name="new-pw" id="new-pw" placeholder="NEW PASSWORD" required>
            <input type="password" name="new-cpw" id="new-cpw" placeholder="CONFIRM PASSWORD" required>

            <div class="form-buttons">
                <button type="button" id="close-reset">Close</button>
                <button type="submit" id="save-reset">Save</button>
            </div>
        </form>
    </dialog>

    <script>
        const forgotPass = document.querySelector("#forgot-pass");
        const resetDialog = document.querySelector("#reset-dialog");
        const closeReset = document.querySelector("#close-reset");
        const resetForm = document.querySelector("#reset-dialog form");

        const newPW = document.querySelector("#new-pw");
        const newCPW = document.querySelector("#new-cpw");
        forgotPass.addEventListener("click" , () => {
            resetDialog.showModal();
        });

        closeReset.addEventListener("click", () => {
            resetDialog.close();
        });

        resetForm.addEventListener("submit", e => {
            if (newPW.value !== newCPW.value) {
                alert("Passwords do not match!");
                e.preventDefault();
            } else if (newPW.value.length < 8) {
                alert("Password must be 8 characters and above");
                e.preventDefault();
            }
        });
    </script>

</body>
</html>