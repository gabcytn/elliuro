<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="preload" href="../fonts/SeasonRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/GeraldineDEMOVer.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../fonts/TroyeFree-Sans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../img/logo_elliuro.JPG" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4bc1035a4c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles/womens.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="nav-main">
                <h1 class="nav-brand">ELLIURO</h1>
                <ul class="nav-list">
                    <li class="nav-item"><a href="mens.php" class="nav-link">Men</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Women</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Kids</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <a href="#"><span class="material-symbols-outlined">search</span></a>
                <a href="#"><span class="material-symbols-outlined">person</span></a>
                <a href="../webpages/cart.php"><span class="material-symbols-outlined">local_mall</span></a>
            </div>
        </nav>
    </header>
    <main>
        <p id="main-title">Women's Collection</p>
        <section class="section-items__sort">
            <div class="items-header container">
                <div class="items-header__left">
                    <div class="items-header__category">
                        <p>Material</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="items-header__category">
                        <p>Color</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="items-header__category">
                        <p>Price</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="items-header__category">
                        <p>Size</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
                <div class="items-header__right">
                    <p>Clear</p>
                    <div class="sort">
                        <p>Sort by relevance</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </section>
       
    </main>

    <?php
        include "../includes/footer.php";
    ?>
</body>
</html>